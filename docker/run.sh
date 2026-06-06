#!/bin/sh

# If Render assigns a port, use it. Otherwise, default to 80.
if [ -z "$PORT" ]; then
  export PORT=80
fi

# Replace PORT placeholder in Nginx config with the actual environment variable
sed -i "s/PORT/$PORT/g" /etc/nginx/http.d/default.conf

# Run optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start PHP-FPM
echo "Starting PHP-FPM..."
php-fpm -D

# Start Nginx in the foreground
echo "Starting Nginx on port $PORT..."
nginx -g "daemon off;"
