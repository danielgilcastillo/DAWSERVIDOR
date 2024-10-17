<?php
/* Tema 2: Sintaxis PHP
1. Ejercicio con echo y HTML Embebido
Crea un archivo PHP que imprime un formulario HTML usando la función echo. El
formulario debe contener un campo de texto para el nombre y un botón de envío.
Cuando el formulario se envía, muestra el nombre ingresado utilizando la misma
página PHP.*/


if ( isset($_POST['nombre'])){ 
    $nombre=$_POST['nombre'];
    echo 'El nombre es:'.$_POST['nombre'];
}else{ 
    ECHO '<form action="" method="POST">
    <input type="text" name="nombre">
    <input type="submit" value="Enviar">
    </form>';
}



