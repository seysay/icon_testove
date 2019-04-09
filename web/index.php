<?php

    use app\Room;

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

//підключення Loader
require '../vendor/liw/core/Loader.php';
//новий екземпляр Loader
$loader = new Loader();
//Реєстрація загрущика класа
spl_autoload_register([$loader, 'loadClass']);


$router = new \liw\core\Router();
$router->start();
require_once '../app/views/main.php';
