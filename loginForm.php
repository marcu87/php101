<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>