<?php

class Dummy {
    public $un_valor = "Cualquier cosa";
}


function suma(Dummy $n1) : string {
    return $n1->un_valor;
}

echo suma(new Dummy);

echo "\n";