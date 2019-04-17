<?php

/** Перевірка на помилки */
error_reporting(E_ALL);
ini_set('display_errors', 1);

/** Підключення autoload, який був встановлений через Composer */
require_once __DIR__ . '/../vendor/autoload.php';

/** Тут прописані маршрутизатори додатку*/
$router = new App\Core\Router();
$router->start();
