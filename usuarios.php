<?php

function obtenerUsuariosRegistrados() {
    return [
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
}

function usuarioLogueadoCorrectamente($usuario, $contraseña) {
    $usuarios = obtenerUsuariosRegistrados();

    foreach ($usuarios as $usuarioRegistrado) {
        if ($usuario == $usuarioRegistrado['usuario'] && $contraseña == $usuarioRegistrado['contraseña']) {
            return true;
        } else {
            return false;
        }
    }
}