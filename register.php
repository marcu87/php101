<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <button type="button" class="btn btn-outline-info" onclick="document.location='registerForm.php'">Volver</button>
</head>
<body>
   
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