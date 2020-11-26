<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="name">Usuario</label>
        <input type="text" name="name" id="user">
        <br>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="password" id="contraseña">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>