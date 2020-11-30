<?php

require __DIR__ . '/usuarios.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$newUser = createNewUser($username, $password, $email);

$errors = [];
if (empty($username)) {
   $errors[] = 'username';
}