#!/bin/bash

# Copy .env.example if .env doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
    php artisan key:generate --force
fi

# Set directory permissions
chmod -R 755 storage bootstrap/cache
find storage -type d -exec chmod 775 {} \;
find storage -type f -exec chmod 664 {} \;

# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Create storage link
php artisan storage:link --force 