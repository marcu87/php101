<?php

require __DIR__ . '/header.php';

?>
<div class="container">
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="user">Usuario</label>
            <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">No compartiremos tu correo electrónico con nadie más</small>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <br>
        <br>
        <label>¿Aún no tienes una cuenta? Regístrate haciendo click <a href="registerForm.php">aquí</a>.</label><br /><br /><br /><br />
    </form>
</div>
</body>

</html>