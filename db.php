<?php
$config = parse_ini_file('.env');

try {
    $pdo = new PDO(
        "mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']};charset=utf8",
        $config['DB_USERNAME'],
        $config['DB_PASSWORD']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Помилка підключення: " . $e->getMessage());
}