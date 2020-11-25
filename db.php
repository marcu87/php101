<?php

/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=php101;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $pdo = new PDO($dsn, $usuario, $contraseña, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    ]);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}