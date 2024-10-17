<?php


// 3. Ejercicio con Diferencias entre Arrays
// Define dos arrays: $array1 con los valores "rojo", "verde", "azul", y
// $array2 con "verde", "amarillo", "azul". Usamos array_diff()para
// determinar qué colores están en $array1 pero no en $array2. Imprime el
// resultado.

$array1=["rojo","verde","azul"];
$array2=["verde","amarillo","azul"];

$diferencia  = array_diff($array1, $array2);

print_r ($diferencia);