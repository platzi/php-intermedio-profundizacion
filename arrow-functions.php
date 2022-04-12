<?php

// Funcionan para leer variables del ámbito global.
/* $cajero = 10;

$add_cajero = fn($add) => $cajero + $add;

echo $add_cajero(20); */

// No funcionan para escribir variables en el ambito global.
/* $cajero = 10;

$add_cajero = fn($add) => $cajero += $add;

$add_cajero(20);
$add_cajero(40);
$add_cajero(4);

echo $cajero; */

$edades = [5, 21, 50, 9, 18];

/* $mayores_de_edad = array_filter($edades, function($current) {
    return $current >= 18;
}); */

$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);

print_r($mayores_de_edad);

echo "\n";