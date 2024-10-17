<?php

/* 
Tema 6: Matrices
1. Ejercicio con Arrays y Recorrido Completo
Crea un array llamado $numeros que contiene los números del 1 al 10. Luego, usa
un bucle foreach para recorrer el array y multiplicar cada número por 2. Almacena
los resultados en un nuevo array y muestra ambos arrays. */

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$multiplo = 0;
$array2 = [];
foreach ($array as $valor) {
    $valor *= 2;
    array_push($array2, $valor);
}
print_r($array);
foreach ($array2 as $valor2) {
    echo $valor2." ";
}
