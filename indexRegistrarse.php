<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="user">
        <br>
        <label for="surname">Apellido</label>
        <input type="text" name="surname" id="user">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>