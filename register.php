<?php

require __DIR__ . '/usuarios.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$newUser = createNewUser($username, $password, $email);

echo '¡Gracias por registrarte!';

$errors = [];
if (empty($username)) {
   $errors[] = 'username';
}

require __DIR__ . '/header.php';
require __DIR__ . '/footer.php';