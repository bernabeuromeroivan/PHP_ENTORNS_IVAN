<?php
session_start();

function db(): PDO{

    static $pdo = null;
    if ($pdo !== null) {
        return $pdo;
    }

    $config = require ('config.local.php');

    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8mb4";

    $pdo = new PDO(
        $dsn,
        $config['user'],
        $config['password'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    return $pdo;
}
?>