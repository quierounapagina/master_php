<?php
/*
Ejercicio 5:
Hacer un Programa todos los numeros entre 2 numeros que nos lleguen por la url (GET)
*/

if (isset($_GET['num1'])&&isset($_GET['num2'])){
    
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    
    if($num1>$num2){
        echo "<h1>El num1 debe ser mayor a num2</h1>";
    }else{
        for ($i=$num1;$i<=$num2;$i++){
        echo "$i, ";
        }
    }

}else{
    echo"<h1>Ingrese Valores de num1 y num 2 por la URL</h1>";
}


?>