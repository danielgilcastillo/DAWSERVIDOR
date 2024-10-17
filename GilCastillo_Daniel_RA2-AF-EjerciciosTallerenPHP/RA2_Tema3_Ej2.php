<?php
/* 2. Ejercicio con Tipos Compuestos (Arrays Multidimensionales)
Crea un array multidimensional llamado $alumnos que contiene información de al
menos tres estudiantes. Cada estudiante debe tener un nombre, una edad y una
lista de  sus respectiv Registre la matriz para mostrar
el nombre de cada alumno y la calificación promedio de sus materias. */

$estudiante1=["pepe" , 23, ['Lengua'=>5, 'Mates'=>8, 'Dibujo'=>3] ];
$estudiante2=["jose" , 24, ['Lengua'=>5, 'Mates'=>9, 'Dibujo'=>3] ];
$estudiante3=["luis" , 25, ['Lengua'=>5, 'Mates'=>10, 'Dibujo'=>3] ];
$todos = [];
array_push($todos, $estudiante1,$estudiante2,$estudiante3);



foreach($todos as $valor){
  $nombre= $valor[0];
  $asignaturas = $valor[2];
  $acumulador=0;
  $media=0;
  foreach($asignaturas as $clave=>$valor2){
    $acumulador=$valor2+$acumulador;
  }
$media=$acumulador/count($asignaturas);
echo"Para $nombre tiene la media de $media";
echo "<br>";
}