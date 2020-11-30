<?php

// [] => array, un listado de valores
// $_GET => array de datos pasados por GET
// $_POST => array de datos pasados por POST
if (count($_GET) > 0) {
    $name = $_GET['nombre'];
    $surname = $_GET['apellido'];
} else {
    $name = $_POST['nombre'];
    $surname = $_POST['apellido'];
}

echo $name . ' ' . $surname;