<?php

echo "<pre>";
echo "🚀 Starting Laravel setup...\n\n";

// Create storage directory structure
echo "📁 Creating storage directories...\n";
$directories = [
    'storage/app/public',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
    'bootstrap/cache'
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
        echo "Created: $directory\n";
    }
}

// Set directory permissions
echo "\n🔒 Setting permissions...\n";
chmod('storage', 0755);
chmod('bootstrap/cache', 0755);
foreach ($directories as $directory) {
    if (is_dir($directory)) {
        chmod($directory, 0755);
        echo "Set permissions for: $directory\n";
    }
}

// Create .env if it doesn't exist
if (!file_exists('.env')) {
    echo "\n📝 Creating .env file...\n";
    copy('.env.example', '.env');
    echo "Created .env file. Please update it with your database credentials.\n";
}

// Create storage link
if (!file_exists('public/storage')) {
    echo "\n🔗 Creating storage link...\n";
    symlink('../storage/app/public', 'public/storage');
    echo "Created storage link\n";
}

// Clear cache files
echo "\n🧹 Clearing cache files...\n";
if (is_dir('bootstrap/cache')) {
    $cacheFiles = glob('bootstrap/cache/*');
    foreach ($cacheFiles as $file) {
        if (is_file($file)) {
            unlink($file);
            echo "Cleared: " . basename($file) . "\n";
        }
    }
}

echo "\n✅ Setup completed!\n";
echo "\n📝 Next steps:\n";
echo "1. Update your .env file with your database credentials\n";
echo "2. Visit meganstarrington.com/setup.php/key to generate application key\n";
echo "3. Visit meganstarrington.com/setup.php/migrate to run migrations\n";

// Handle additional commands through URL parameters
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (strpos($path, '/key') !== false) {
    echo "\n🔑 Generating application key...\n";
    require __DIR__.'/artisan';
    $kernel = app()->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->call('key:generate', ['--force' => true]);
    echo "Application key generated!\n";
} elseif (strpos($path, '/migrate') !== false) {
    echo "\n📊 Running migrations...\n";
    require __DIR__.'/artisan';
    $kernel = app()->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->call('migrate', ['--force' => true]);
    echo "Migrations completed!\n";
}

echo "</pre>"; 