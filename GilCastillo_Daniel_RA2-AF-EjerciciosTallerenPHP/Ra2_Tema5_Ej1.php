<?php


/* Tema 5: Estructuras de Control
1. Ejercicio con if, else, elseifpara Determinar Edad
Escribe un script en PHP que pida al usuario ingresar su edad. Luego, utiliza una
estructura if, elseif, else para imprimir un mensaje diferente según la edad:
"Eres menor de edad" (< 18), "Eres adulto joven" (18-35), "Eres adulto" (36-65),
"Eres alcalde" (> 65). */


if ( isset($_POST['edad'])){ 
    $edad=$_POST['edad'];
    if($edad<18){
        echo "Eres menor de edad";
    }
    else if($edad>=18 && $edad<=35){
        echo "Eres adulto joven";
    }
    else if($edad>=36 && $edad<=65){
        echo "Eres adulto";
    }
    else{
        echo"Eres alcalde";
    }
    
}else{ 
    ECHO '<form action="" method="POST">
    <input type="text" name="edad">
    <input type="submit" value="Enviar">
    </form>';
}
