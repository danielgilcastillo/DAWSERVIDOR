<?php

/* 2. Ejercicio con Función con Argumentos Predeterminados y Retorno
Crea una función llamada convertirTemperatura()que acepte dos
argumentos: una temperatura y una escala ( "C"o "F"). Por defecto, convierte de
Celsius a Fahrenheit. La función debe devolver la temperatura convertida. Utilice la
fórmula: (C * 9/5) + 32. */


$Fahrenheit = 0;
function convertirTemperatura($tempoeratura, $escala)
{
    if ($escala == "c") {
        $celsius = ($tempoeratura - 32) * 5 / 9;
        return $celsius;
    } else {
        $Fahrenheit = ($tempoeratura * 9 / 5)  + 32;
        return $Fahrenheit;
    }
}


$res = convertirTemperatura(35,"f");
echo $res;




