<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br>
            <label>¿Aún no tienes una cuenta? Regístrate haciendo click <a href="registerForm.php">aquí</a>.</label><br /><br /><br /><br />
        </form>
        <!-- 
            <label for="user">Usuario o Email</label>
            <input type="text" name="user" id="user">
            <br>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Enviar</button>
            <br>
            <label>¿Aún no tienes una cuenta? Regístrate haciendo click <a href="registerForm.php">aquí</a>.</label><br /><br /><br /><br />
            </form>
            -->
    </div>
</body>

</html>