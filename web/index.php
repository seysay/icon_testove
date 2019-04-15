<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//підключення autoload
require_once __DIR__ . '/../vendor/autoload.php';

$router = new App\Core\Router();
$router->start();
