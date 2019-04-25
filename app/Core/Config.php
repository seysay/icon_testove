<?php

namespace App\Core;

class Config
{
    private $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=students';
        $username = 'root';
        $password = '123';
        $options = [];

        $connection = new \PDO($dsn, $username, $password, $options);

        $this->pdo = $connection;
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
