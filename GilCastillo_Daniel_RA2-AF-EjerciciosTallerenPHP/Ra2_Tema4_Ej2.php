<?php


/* 2. Ejercicio con Operadores de Comparación y Lógicos
Declara tres variables: $a, $b y $c, con valores numéricos diferentes. Utilice
operadores de comparación y lógicos para verificar si $a es mayor que $b y si $c es
menor que $a. Imprima un mensaje que indique si ambas condiciones son
verdaderas o si alguna es falsa. */

$a = 19;
$b = 2;
$c = 3;

echo "Analizamos expresiones de si a es mayor que b y a es mayor que c";

echo "<br>";

if ($a > $b && $a > $c) {

    echo "Las dos son verdaderas";

} else {
    echo "No se cumple ALGUNA o NINGUNA de las condiciones";
}
