<?php

require __DIR__ . '/header.php';

require __DIR__ . '/usuarios.php';

$users = fetchUsers();

$username = $_POST['user'];
$password = $_POST['password'];

$loggedUser = correctlyLoggedUser($username, $password);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ml-1 {
            margin-left: ($spacer * .25) !important;
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php if ($loggedUser == true): ?>
        <div class="table-responsive-md">
        <table class="table">
        <!-- <table> -->
            <!-- <tr> -->
            <tr class="table-info">
                <th>Nombre</th>
            </tr>
            <?php foreach ($users as $registeredUser): ?>
                <tr>
                    <td><?php echo $registeredUser['username']; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    <?php endif; ?>
        <br>
        <button type="button" class="btn btn-outline-info" onclick="document.location='loginForm.php'">Volver</button>
</body>
</html>