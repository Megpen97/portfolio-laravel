#!/bin/bash

echo "🚀 Starting deployment..."

# Copy .env.example if .env doesn't exist
if [ ! -f .env ]; then
    echo "📝 Creating .env file..."
    cp .env.example .env
    php artisan key:generate --force
fi

# Create necessary directories
echo "📁 Creating directory structure..."
mkdir -p bootstrap/cache
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs

# Set directory permissions
echo "🔒 Setting permissions..."
chmod -R 755 storage bootstrap/cache
find storage -type d -exec chmod 775 {} \;
find storage -type f -exec chmod 664 {} \;

# Clear all caches
echo "🧹 Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Create storage link
echo "🔗 Creating storage link..."
php artisan storage:link --force

# Discover packages manually
echo "📦 Discovering packages..."
php artisan package:discover --ansi

echo "✅ Deployment completed!" 