<?php
date_default_timezone_set('UTC');
ini_set('display_errors', 0);
ini_set('session.use_cookies', 0);
$loader = require __DIR__ . '/vendor/autoload.php';
use App\RestApi;

// Run app
RestApi::Create($loader)->run();