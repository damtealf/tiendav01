<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'tienda_dante');
define('DB_USER', 'root');
define('DB_PASS', '321015123');

function getDBConnection() {
    try {
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        return new PDO($dsn, DB_USER, DB_PASS, $options);
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}
?>