<?php

require __DIR__ . '/db.php';

function fetchUsers() {
    global $pdo;

    $result = $pdo->query('SELECT * FROM `users`');

    return $result->fetchAll();
}

function usuarioLogueadoCorrectamente($usuario, $contraseña) {
    $usuarios = fetchUsers();

    foreach ($usuarios as $usuarioRegistrado) {
        if ($usuario == $usuarioRegistrado['username'] && $contraseña == $usuarioRegistrado['password']) {
            return true;
        } else {
            return false;
        }
    }
}