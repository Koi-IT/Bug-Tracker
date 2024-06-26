<?php
    // Database connection settings
    $host = '127.0.0.1';
    $dbname = 'bug_tracker';
    $dbuser = 'root';
    $dbpass = '';


    try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpass);
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, handle the error
    die("Connection failed: " . $e->getMessage());
}