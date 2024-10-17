<?php

/* Tema 7: Funciones
1. Ejercicio con Funciones y Argumentos por Referencia
Define una función llamada incrementarPorValor()que acepte una variable por
referencia y la incremente en 10. Llama a la función pasando una variable y muestra
su valor antes y después de la llamada para ver el cambio. */

function incrementarPorValor($b){
    $b+=10;
    echo $b;
}

$a = 70;

echo $a;
incrementarPorValor($a);
echo $a;

echo "<br>";


// =================================================


function incrementarPorReferencia(&$b){
    $b+=10;
    echo $b;
}

$a = 70;

echo $a;
incrementarPorReferencia($a);
echo $a;

echo "<br>";


