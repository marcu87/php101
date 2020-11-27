<?php
if (isset($_POST['errors'])){
    $errors = $_POST['errors'];
}
$errors = [
    'username',
    'email',
    'password'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <style>
        .input-error-message {
            color: red;
        }
        .submit-button {
            color: purple;
        }
    </style>
</head>
<body>
    <form action="register.php" method="POST">
        <label for="name"> Usuario </label>
        <input type="text" name="name" id="user">
        <?php if (in_array('username', $errors)): ?>
            <span class="input-error-message">Falta completar este campo</span>
        <?php endif; ?>
        <br>
        <label for="email"> Email </label>
        <input type="email" name="email" id="email">
        <?php if (in_array('email', $errors)): ?>
            <span class="input-error-message">Falta completar este campo</span>
        <?php endif; ?>
        <br>
        <label for="password"> Contraseña </label>
        <input type="password" name="password" id="contraseña">
        <?php if (in_array('password', $errors)): ?>
            <span class="input-error-message">Falta completar este campo</span>
        <?php endif; ?>
        <br>
        <button type="submit" class="submit-button">Enviar</button>
    
    </form>
</body>
</html>
