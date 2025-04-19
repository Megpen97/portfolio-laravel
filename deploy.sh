#!/bin/bash

# Exit on error
set -e

echo "🚀 Starting deployment process..."

# Function to check if command exists
command_exists() {
    command -v "$1" >/dev/null 2>&1
}

# Function to handle errors
handle_error() {
    echo "❌ Error occurred in deployment script at line $1"
    exit 1
}

# Set up error handling
trap 'handle_error $LINENO' ERR

# Check for required commands
if ! command_exists composer; then
    echo "📥 Composer is not installed. Installing composer..."
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    COMPOSER_HASH="$(curl -sS https://composer.github.io/installer.sig)"
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '$COMPOSER_HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); exit(1); }"
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer
    php -r "unlink('composer-setup.php');"
fi

if ! command_exists npm; then
    echo "❌ npm is not installed. Please install Node.js and npm before continuing."
    exit 1
fi

# Update code from repository
echo "📥 Pulling latest changes from git..."
git pull origin main

# Create .env file if it doesn't exist
if [ ! -f .env ]; then
    echo "📝 Creating .env file..."
    cp .env.example .env
    php artisan key:generate
fi

# Clean up any previous installation artifacts
echo "🧹 Cleaning up previous installation..."
rm -rf vendor
rm -rf node_modules
rm -f composer.lock
rm -f package-lock.json

# Install PHP dependencies
echo "📦 Installing PHP dependencies..."
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Install Node.js dependencies and build assets
echo "🛠️ Installing Node.js dependencies and building assets..."
npm ci
npm run build

# Clear Laravel caches
echo "🧹 Clearing Laravel caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize Laravel
echo "⚡ Optimizing Laravel..."
php artisan optimize

# Run database migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force

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