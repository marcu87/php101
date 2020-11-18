<?php

require __DIR__ . '/usuarios.php';

$usuarios = obtenerUsuariosRegistrados();

$user = $_POST['usuario'];
$password = $_POST['contraseña'];
$usuarioLogueado = usuarioLogueadoCorrectamente($user, $password);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php if ($usuarioLogueado == true): ?>
        <table>
            <tr>
                <th>Nombre</th>
            </tr>
            
            <?php foreach ($usuarios as $usuarioRegistrado): ?>
                <tr>
                    <td><?php echo $usuarioRegistrado['usuario']; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    <?php endif; ?>
</body>
</html>