<?php

/* 2. Ejercicio con Bucledo-while
Escribe un script en PHP que use un bucle do-while para pedir al usuario que
ingrese un número positivo. Si el número ingresado es negativo, el script debe
continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
número positivo ingresado. */
$numero=0;

if ( isset($_POST['numero'])){ 
    $numero=$_POST['numero'];
    if ( intval($numero) >= 0 ){
        echo "Vale el numero " . $numero; 
     }else{ 
        echo 'El numero es invalido, ha de ser positivo';
        ECHO '<form action="" method="POST">
        <input type="text" name="numero">
        <input type="submit" value="Enviar">
        </form>';
     }    
  
}else{ 
    ECHO '<form action="" method="POST">
    <input type="text" name="numero">
    <input type="submit" value="Enviar">
    </form>';
}
