
<?php

/* 
3. Ejercicio con Variables y Constantes
Define una constante TASA_INTEREScon el valor 0.05. Luego, escribe un script
que acepta una cantidad principal ingresada por el usuario y calcula el interés simple
después de un año, utilizando la constante. Imprima el resultado con un formato
adecuado. */

const TASA_INTERES=0.05;
if ( isset($_POST['cantidad'])){ 

    $cantidad=$_POST['cantidad'];
    $resultado=$cantidad*TASA_INTERES;
    echo 'El interés simple, después de un anio es:'.$resultado;
}else{ 
    ECHO '<form action="" method="POST">
    <input type="text" name="cantidad">
    <input type="submit" value="Enviar">
    </form>';
}












