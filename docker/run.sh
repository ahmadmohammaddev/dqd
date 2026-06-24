#!/bin/sh

# If a PORT is assigned (e.g. by Render), use it. Otherwise, default to 80.
if [ -z "$PORT" ]; then
  export PORT=80
fi

# Replace PORT placeholder in Nginx config with the actual environment variable
sed -i "s/PORT/$PORT/g" /etc/nginx/http.d/default.conf

# ── Wait for the database to be reachable ──────────────────
echo "Waiting for database at ${DB_HOST:-127.0.0.1}:${DB_PORT:-3306}..."
max_attempts=30
attempt=0
while [ $attempt -lt $max_attempts ]; do
  # Use PHP to test the MySQL connection (no extra dependencies needed)
  php -r "
    \$h = getenv('DB_HOST') ?: '127.0.0.1';
    \$p = getenv('DB_PORT') ?: 3306;
    try { new PDO(\"mysql:host=\$h;port=\$p\", getenv('DB_USERNAME') ?: 'root', getenv('DB_PASSWORD') ?: ''); exit(0); }
    catch (Exception \$e) { exit(1); }
  " 2>/dev/null && break
  attempt=$((attempt + 1))
  echo "  Database not ready yet (attempt $attempt/$max_attempts)..."
  sleep 2
done

if [ $attempt -ge $max_attempts ]; then
  echo "ERROR: Could not connect to database after $max_attempts attempts. Starting anyway..."
fi

echo "Database is reachable!"

# ── Laravel bootstrapping ──────────────────────────────────
# Ensure .env exists in the container for Laravel configuration
if [ ! -f .env ]; then
  echo "Creating .env from .env.example..."
  cp .env.example .env
fi

# Generate app key if not set in the active environment OR .env
if [ -z "$APP_KEY" ] && ! grep -q "^APP_KEY=base64:" .env; then
  echo "Generating application key..."
  php artisan key:generate --force --no-interaction
fi

# Ensure APP_KEY is exported to the environment so PHP-FPM and artisan commands inherit it
if [ -z "$APP_KEY" ]; then
  export APP_KEY=$(grep "^APP_KEY=" .env | cut -d '=' -f 2-)
fi

# Run migrations
echo "Running database migrations..."
php artisan migrate --force --no-interaction

# Run optimizations
php artisan config:cache
php artisan route:cache
# Fix permissions so Nginx/PHP-FPM (running as www-data) can read/write files (like logs, cache, sessions) created by root
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# ── Start services ─────────────────────────────────────────
# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm -D

# Start Nginx in the foreground
echo "Starting Nginx on port $PORT..."
nginx -g "daemon off;"
