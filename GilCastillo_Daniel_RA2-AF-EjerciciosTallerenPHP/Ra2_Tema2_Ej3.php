<?php

/* 3. Ejercicio con Variables y Constantes Complejas
Declara una llamada constante GRAVITY con el valor 9.8. 
Luego, crea una función
que acepta el nombre de un planeta y, 
si el planeta es "Tierra", 
multiplica un valor de masa ingresado por la gravedad (utilizando la constante).
 Usa variables para
almacenar el resultado e imprimir un mensaje con la fuerza de gravedad aplicada. */

const GRAVITY = 9.8;


function masagravedad($planeta, $masa)
{
    if ($planeta == "Tierra") {
        $peso = $masa * GRAVITY;
        echo "$peso es el peso de la Tierra";
    }
}

masagravedad("Tierra", 10000000);