<?php
    $dsn = 'mysql:host=localhost;dbname=students';
    $username = 'root';
    $password = '123';
    $options = [];
    try {
        $connection = new PDO($dsn, $username, $password, $options);
    } catch(PDOException $e) {
        echo ('ERROR: ' . $e->getMessage());
    }
