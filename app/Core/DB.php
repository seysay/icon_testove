<?php

namespace App\Core;

class DB
{
    private $pdo;

    public function __construct()
    {
        $dsn = getenv('DB_HOST');
        $username = getenv('DB_USER');
        $password = getenv('DB_PASS');
        $options = [];

        $connection = new \PDO($dsn, $username, $password,$options);

        $this->pdo = $connection;
    }

    public function getPdo()
    {
        return $this->pdo;
    }
}
