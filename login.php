<?php

$usuarios = [
    [
        'usuario' => 'Paula',
        'contraseña' => '123'
    ],
    [
        'usuario' => 'Santi',
        'contraseña' => '321'
    ],
    [
        'usuario' => 'Pepe',
        'contraseña' => '321'
    ],
    [
        'usuario' => 'Juan',
        'contraseña' => '321'
    ]
];

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$usuarioLogueado = false;

foreach ($usuarios as $usuarioRegistrado) {
    if ($usuario == $usuarioRegistrado['usuario'] && $contraseña == $usuarioRegistrado['contraseña']) {
        $usuarioLogueado = true;
        $mensaje = '¡Usuario logueado correctamente!';
        break;
    } elseif ($usuario == $usuarioRegistrado['usuario'] && $contraseña != $usuarioRegistrado['contraseña']) {
        $mensaje = '¡Contraseña incorrecta!';
        break;
    } else {
        $mensaje = 'El usuario no existe';
        break;
    }
}
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