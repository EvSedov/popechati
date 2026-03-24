#!/bin/bash
set -e

echo "==> Running migrations..."
php artisan migrate --force || echo "Migration failed or skipped, continuing..."

echo "==> Setting permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true

echo "==> Substituting PORT in nginx config..."
sed "s/\$PORT/${PORT:-8080}/g" /app/nginx.conf > /etc/nginx/conf.d/default.conf

echo "==> Starting php-fpm..."
php-fpm -D

echo "==> Starting nginx on port ${PORT:-8080}..."
nginx -g "daemon off;"
