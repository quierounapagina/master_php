<?php
/*
Ejercicio 4:
Recoger 2 numeros por la url (GET) y hacer todas las operaciones basicas de una calculadora
suma, resta, multiplicacion y division de ambos numeros
*/
if (isset($_GET['num1'])&&isset($_GET['num2'])){
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];
    
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $division = $numero1/$numero2;

    echo "La suma de $numero1 + $numero2 es: $suma <br />";
    echo "La resta de $numero1 + $numero2 es: $resta <br />";
    echo "La multiplicacion de $numero1 + $numero2 es: $multiplicacion <br />";
    echo "La division de $numero1 + $numero2 es: $division <br />";
}else{
    echo "<h1>Instroducir num1 y num2 por la URL</h1>";
}


?>
