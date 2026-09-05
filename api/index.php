<?php

try {
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

    if (!file_exists('/tmp/database.sqlite')) {
        touch('/tmp/database.sqlite');
    }

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

    if (!defined('LARAVEL_START')) {
        define('LARAVEL_START', microtime(true));
    }

    require __DIR__ . '/../vendor/autoload.php';

    $app = require __DIR__ . '/../bootstrap/app.php';

    if (is_object($app) && method_exists($app, 'useStoragePath')) {
        $app->useStoragePath('/tmp/storage');
    }

    $app->handleRequest(Request::capture());

} catch (\Throwable $e) {
    http_response_code(500);
    echo "<div style='font-family: sans-serif; padding: 20px; background: #fff0f0; border: 1px solid #ffc0c0; border-radius: 8px; margin: 20px;'>";
    echo "<h2 style='color: #d32f2f; margin-top: 0;'>Laravel Serverless Diagnostic Output</h2>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " on line " . $e->getLine() . "</p>";
    echo "<pre style='background: #f5f5f5; padding: 10px; border-radius: 4px; overflow-x: auto;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    echo "</div>";
}
