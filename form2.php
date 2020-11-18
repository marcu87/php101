<?php

// [] => array, un listado de valores
// $_GET => array de datos pasados por GET
// $_POST => array de datos pasados por POST
if (count($_GET) > 0) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
} else {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
}

echo $nombre . ' ' . $apellido;