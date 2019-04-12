<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

//підключення Loader
//require __DIR__ . '../vendor/autoload.php';
require '../app/Core/Loader.php';
//новий екземпляр Loader
$loader = new \App\Core\Loader();
//Реєстрація загрущика класа
spl_autoload_register([$loader, 'loadClass']);

$router = new \app\Core\Router();
$router->start();
