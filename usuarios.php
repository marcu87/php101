<?php

require __DIR__ . '/db.php';

function fetchUsers() {
    global $pdo;

    $result = $pdo->query('SELECT * FROM `users`');

    return $result->fetchAll();
}

function createNewUser($username, $password) {
    global $pdo;

    $result = $pdo->query("INSERT INTO `users` (username, password) VALUES ('$username', '$password')");

    if (!$result) {
        return false;
    }

    return $pdo->lastInsertId();
}

function usuarioLogueadoCorrectamente($usuario, $contraseña) {
    $usuarios = fetchUsers();

    // TODO: fix bug in which the foreach returns false when the first user is not the correct one.
    foreach ($usuarios as $usuarioRegistrado) {
        if ($usuario == $usuarioRegistrado['username'] && $contraseña == $usuarioRegistrado['password']) {
            return true;
        } else {
            return false;
        }
    }
}

function isValidPassword($password) {
    return strlen($password) >= 8;
}