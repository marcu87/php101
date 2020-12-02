<?php

require __DIR__ . '/usuarios.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$newUser = createNewUser($username, $password, $email);

$errors = [];
if (empty($username)) {
   $errors[] = 'username';
}