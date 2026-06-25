#!/bin/sh
set -e

# ── Wait for the database to be reachable ──────────────────
echo "Waiting for database at ${DB_HOST:-127.0.0.1}:${DB_PORT:-3306}..."
max_attempts=30
attempt=0
while [ $attempt -lt $max_attempts ]; do
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
# Force APP_URL to HTTPS for correct asset URLs behind Traefik
export APP_URL="https://dqd.today"

# Generate app key if not set via env
if [ -z "$APP_KEY" ]; then
  echo "Generating application key..."
  php artisan key:generate --force --no-interaction
fi

# Create storage symlink
php artisan storage:link --no-interaction 2>/dev/null || true

# Run migrations
echo "Running database migrations..."
php artisan migrate --force --no-interaction 2>&1

# Run optimizations
echo "Caching config..."
php artisan config:cache 2>&1 || echo "Config cache failed, continuing..."
echo "Caching routes..."
php artisan route:cache 2>&1 || echo "Route cache failed, continuing..."

# Ensure CSV seed directory exists and populate from image (bypasses persistent volume)
mkdir -p storage/app/csv
if [ -d /var/www/html/csv-seed-data ] && [ -z "$(ls -A storage/app/csv 2>/dev/null)" ]; then
  echo "Copying seed CSV files into storage volume..."
  cp -r /var/www/html/csv-seed-data/* storage/app/csv/
fi

# Fix permissions
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# ── Start services ─────────────────────────────────────────
echo "Starting PHP-FPM..."
php-fpm -D

echo "Starting Nginx..."
nginx -g "daemon off;"
