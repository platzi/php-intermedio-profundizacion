<?php

function michi() {
    echo "Meow!";
}

function dogo() {
    echo "Woof!";
}

function zorro() {
    echo "Zorro no te lo lleves!";
}

$function = readline("Escribe cual funcion quieres ejecutar: ");

$function();

echo "\n";