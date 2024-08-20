<?php

// /config/database.php

$host = 'localhost'; // Database host
$dbname = 'my_database'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

