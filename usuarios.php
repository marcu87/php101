<?php

require __DIR__ . '/db.php';

function fetchUsers() {
    global $pdo;

    $result = $pdo->query('SELECT * FROM `users`');

    return $result->fetchAll();
}

function createNewUser($username, $password, $email) {
    global $pdo;

    $result = $pdo->query("INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')");

    if (!$result) {
        return false;
    }

    return $pdo->lastInsertId();
}

function correctlyLoggedUser($username, $password) {
    $users = fetchUsers();

    // TODO: fix bug in which the foreach returns false when the first user is not the correct one.
    foreach ($users as $registeredUser) {
        
        if ($username == $registeredUser['username'] && $password == $registeredUser['password']) {
            return true;
        } else {
            return false;
        }
    }
}

function isValidPassword($password) {
    return strlen($password) >= 8;
}
?>