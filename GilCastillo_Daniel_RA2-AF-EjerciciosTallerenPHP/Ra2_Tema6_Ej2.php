<?php



/* 2. Ejercicio con Arrays Multidimensionales
Define un array multidimensional que contiene la información de tres productos:
nombre, precio, y cantidad_en_stock. Usa un bucle foreach para calcular el
valor total de cada producto ( precio * cantidad_en_stock) y muestra los
resultados. */



$producto1 = ["nombre"=>'tornillo', "precio"=>23 , "stock"=>3];
$producto2 = ["nombre"=>'martillo', "precio"=>24 , "stock"=>4];
$producto3 = ["nombre"=>'llave', "precio"=>25 , "stock"=>5];

$array=[$producto1, $producto2, $producto3];

$resultado=0;
foreach($array as $p){
    $resultado=$p["precio"]*$p["stock"];
  echo  "resultado para " . $p["nombre"] . " es:".$resultado;
  echo"</br>";
}
// $array=[ ["nombre"=>'tornillo', "precio"=>23 , "stock"=>3], ["nombre"=>'tornillo', "precio"=>23 , "stock"=>3], ["nombre"=>'tornillo', "precio"=>23 , "stock"=>3]];








