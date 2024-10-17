<?php
/* Tema 3: Tipos, Variables y Constantes
1. Ejercicio con Tipos y Conversión
Declara una variable de tipo cadena que contenga un número ( "25"). Luego,
convierte esta variable a un tipo de dato entero y realiza una suma con otro número.
Imprime el resultado antes y después de la conversión utilizando var_dump()para
ver el tipo de dato.
 */
$variable="25";
var_dump($variable);
echo "<br>";

$numero =     intval($variable);
var_dump($numero);
echo "<br>";
$suma = $numero + 23;


echo $numero * 10;
