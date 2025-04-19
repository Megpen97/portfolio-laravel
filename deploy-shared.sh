#!/bin/bash

echo "🚀 Starting deployment process..."

# Update code from repository
echo "📥 Pulling latest changes from git..."
git pull origin main

# Create .env file if it doesn't exist
if [ ! -f .env ]; then
    echo "📝 Creating .env file..."
    cp .env.example .env
    php artisan key:generate
fi

# Clear Laravel caches
echo "🧹 Clearing Laravel caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize Laravel
echo "⚡ Optimizing Laravel..."
php artisan optimize

# Set proper permissions
echo "🔒 Setting proper permissions..."
chmod -R 755 .
chmod -R 775 storage bootstrap/cache
chmod -R 775 public
find storage -type d -exec chmod 775 {} \;
find storage -type f -exec chmod 664 {} \;

# Create storage link if it doesn't exist
php artisan storage:link

echo "✅ Deployment completed successfully!" 