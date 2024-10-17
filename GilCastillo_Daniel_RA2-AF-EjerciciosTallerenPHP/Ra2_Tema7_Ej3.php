<?php



/* 3. Ejercicio con Funciones Anónimas y Función array_map
Crea un array de números del 1 al 5. Usa una función anónima con
array_map()para elevar cada número al cuadrado y almacenar los resultados en
un nuevo array. Imprime el array original y el nuevo array. */



function pasarAlCuadradoSimple($array)
{
    $array2 = [];
    foreach ($array as $valor) {
        $valor *= $valor;
        array_push($array2, $valor);
    }
    return $array2;
}

$array = [1, 2, 3, 4, 5];
$res = pasarAlCuadradoSimple($array);
print_r($array);
echo("<br>");
print_r($res);
echo("<br>");

// =======================================================

function pasarAlCuadrado($a)
{
    $b = $a * $a;
    return $b;
}

$array = [1, 2, 3, 4, 5];

$res = array_map("pasarAlCuadrado", $array);

print_r($array);
echo("<br>");
print_r($res);
echo("<br>");








