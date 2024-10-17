
<?php

/* 3. Ejercicio con switch para Menús
Crea un menú de opciones con switch, donde el usuario pueda elegir entre
"Sumar", "Restar", "Multiplicar" y "Dividir". Solicita dos números al usuario y realiza la
operación seleccionada. Si el usuario selecciona una opción inválida, se muestra un
mensaje de error. */

if (isset($_POST['operacion'])) {
    $operacion = $_POST['operacion'];
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero1 =  intval($numero1);
    $numero2 = intval($numero2);
    $resultado=0;
    switch ($operacion) {
        case "sumar":
            $resultado=$numero1+$numero2;
            break;
        case "restar":
            $resultado=$numero1-$numero2;
            break;
        case "multiplicar":
            $resultado=$numero1*$numero2;
            break;
        case "dividir":
            $resultado=$numero1/$numero2;
            break;
    }
    echo 'El resultado es:' . $resultado;
} else {
    echo '<form action="" method="POST">
    
   Dame una opción: <input type="text" name="operacion">
   Dame numero1: <input type="text" name="numero1">
   Dame numero2: <input type="text" name="numero2">

    <input type="submit" value="Enviar">
    </form>';
}
