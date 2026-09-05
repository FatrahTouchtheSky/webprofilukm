<?php

// 1. Prepare /tmp storage and database directories for Vercel Serverless environment
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/bootstrap/cache',
    '/tmp/storage/logs',
    '/tmp/storage/app/public',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 2. Fallback SQLite database in /tmp if sqlite is used
if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
}

// 3. Set Vercel-friendly environment fallbacks
if (!getenv('APP_KEY')) {
    putenv('APP_KEY=base64:pDrfHKNhXwKPri5VRSIOc3ebovSq8euSPANIp8fkBeI=');
    $_ENV['APP_KEY'] = 'base64:pDrfHKNhXwKPri5VRSIOc3ebovSq8euSPANIp8fkBeI=';
}

putenv('APP_CONFIG_CACHE=/tmp/storage/bootstrap/cache/config.php');
putenv('APP_EVENTS_CACHE=/tmp/storage/bootstrap/cache/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/storage/bootstrap/cache/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/storage/bootstrap/cache/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/storage/bootstrap/cache/services.php');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('LOG_CHANNEL=stderr');

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 4. Register Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// 5. Bootstrap Laravel Application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 6. Redirect Laravel storage directory from read-only filesystem to /tmp/storage
$app->useStoragePath('/tmp/storage');

// 7. Capture request and handle
$app->handleRequest(Request::capture());
