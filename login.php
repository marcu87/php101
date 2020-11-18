<?php

$credencialesRegistradas = [
    [
        'usuario' => 'Paula',
        'contraseña' => '123'
    ],
    [
        'usuario' => 'Santi',
        'contraseña' => '321'
    ]
];

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

foreach ($credencialesRegistradas as $credencialRegistrada) {
    if ($usuario == $credencialRegistrada['usuario'] && $contraseña == $credencialRegistrada['contraseña']) {
        echo '¡Usuario logueado correctamente!';
        die;

        echo 'Credenciales incorrectas';

        }
    if ($usuario == $credencialRegistrada['usuario'] && $contraseña != $credencialRegistrada['contraseña']) {
        echo '¡Contraseña incorrecta!';
        die;
    }
}

echo 'El usuario no existe';


// tarea
// Si las credenciales son incorrectas pero el usuario existe, mostrar: Contraseña incorrecta,
// Sino, mostrar: el usuario no existe