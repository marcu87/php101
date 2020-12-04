<?php

require __DIR__ . '/usuarios.php';

/**
 * Antes de loguearse -> $_SESSION = [];
 * Despues de loguearse -> $_SESSION = ['username' => 'Paula' ];
 */

session_start();
if (empty($_SESSION) == false) {
    echo 'Ya estás logueado';
}
else {
    $username = $_POST['user'];
    $password = $_POST['password'];
    
    $loggedUser = correctlyLoggedUser($username, $password);
    
    if ($loggedUser == true) {
        $_SESSION['username'] = $username;
    }

}

$users = fetchUsers();

require __DIR__ . '/header.php';

?>

<div class="container">
    <?php if ($loggedUser == true) : ?>
        <div class="table-responsive-md">
            <table class="table">
                <!-- <table> -->
                <!-- <tr> -->
                <tr class="table-info">
                    <th>Nombre</th>
                </tr>
                <?php foreach ($users as $registeredUser) : ?>
                    <tr>
                        <td><?php echo $registeredUser['username']; ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    <?php endif; ?>
</div>
<br>
<button type="button" class="btn btn-outline-info" onclick="document.location='loginForm.php'">Volver</button>

<?php
require __DIR__ . '/footer.php';
