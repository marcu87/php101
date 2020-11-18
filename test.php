<?php

// tipos de datos
// Strings: textos
// Ints: numeros enteros
// floats: numeros con decimales
// booleans: true o false
$nombre = 'Paula';
$edad = 0;

if ($edad > 18) {
    echo "$nombre es mayor de edad";
} elseif ($edad < 18 && $edad > 0) {
    echo $nombre . ' es menor de edad';
} else {
    echo "$nombre no nació todavía!!!!";
}