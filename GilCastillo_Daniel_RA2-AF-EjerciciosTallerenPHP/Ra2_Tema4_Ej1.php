<?php
/* 
Tema 4: Operadores
1. Ejercicio con Operadores de Asignación y Condicionales
Declara una variable con un valor inicial de 100. Usa operadores de asignación 
(+=, -=, etc.) para modificar su valor en diferentes etapas y luego usa una
condicional ifpara determinar si el valor final es mayor o menor que 100. */

$variable=100;
$variable = $variable+2;

$variable+=9;

$variable*=2;


$variable-=22;


$variable/=5;

$variable+=10;

if($variable>100){
    echo"variable es mayor que 100";
}
else if($variable<100){
    echo"variable es menor que 100";
}
else{
echo"variable es igual que 100";
}

