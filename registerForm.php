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
    <br>
    <br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        .input-error-message {
            color: blue;
        }
        .submit-button {
            color: purple;
        }
    </style>
</head>
<body>
    <div class="container">    
    <form action="register.php" method="POST">
            <label for="username"> Usuario </label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
            <?php if (in_array('username', $errors)): ?>
                <span class="input-error-message">Falta completar este campo</span>
            <?php endif; ?>
            <br>
            <br>    
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            <?php if (in_array('email', $errors)): ?>
                <span class="input-error-message">Falta completar este campo</span>
            <?php endif; ?>
            <br>
            <br>
            <label for="password"> Contraseña </label>
            <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
            <?php if (in_array('password', $errors)): ?>
                <span class="input-error-message">Falta completar este campo</span>
            <?php endif; ?>
            <br>
            <br>
            <button type="submit" class="submit-button">Enviar</button>
    </form>
</body>
</html>
