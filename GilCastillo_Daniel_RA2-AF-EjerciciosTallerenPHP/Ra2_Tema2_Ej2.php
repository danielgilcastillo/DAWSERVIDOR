
<?php


/* 2. Ejercicio de Comentarios y Buenas Prácticas
Escribe un script en PHP que contenga una función de llamada
calcularAreaRectangulo($ancho, $alto). Documente cada parte del guión
con comentarios detallados, incluyendo la explicación de la función, los parámetros y
cómo se realiza la operación. Usa comentarios multilínea para explicar el propósito
general del script y comentarios de una sola línea para detallar las operaciones. */

/*
Función calcularAreaRectangulo,
Recibe dos parámetros y
dentro de ella, los multiplica y lo lanza en un return.
Los parametros han de ser numericos
*/
function calcularAreaRectangulo($ancho, $alto){  // recibe dos parametros como numeros que son el ancho y el alto del rectangulo
    // calculamos el area mutiplicando ancho por alto
    $area=$ancho*$alto;
    // devolver el valor el area 
    return $area;
}



$ancho=4;
$alto=2;
echo calcularAreaRectangulo($ancho, $alto);
