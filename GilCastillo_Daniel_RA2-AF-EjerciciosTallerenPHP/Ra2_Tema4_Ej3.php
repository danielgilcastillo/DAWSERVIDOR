<?php

/* 3. Ejercicio con Operador Ternario Anidado
Defina una variable llamada $calificacion que contenga un valor numérico.
Utilice un operador ternario anidado para determinar si la calificación es
"Sobresaliente" (90-100), "Buena" (70-89), o "Necesita mejorar" (menor a 70).
Imprime el resultado. */

$calificacion=95;

$res =  $calificacion>=90   ? "SOBRESALIENTE" : ($calificacion>=70   ? "NOTABLE" : "NECESITA MEJORAR");

echo $res;
