<?php
/*
Ejercicio 6:
Mostrar una Tabla de HTML con las Tablas de Multiplicar del 1 al 10
*/

echo "<h1>Tablas de Multiplicar del 1 al 10</h1>";

echo "<table border='1'>"; //Inicio de la Tabla
echo "<tr>"; // Inicio Fila de Celdas
    for ($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }
echo "</tr>"; // Fin de Celdas
echo "<tr>"; // Inicio Fila de Celdas 2
    for ($i = 1; $i <= 10; $i++){
        echo "<td>";
         for ($x=1; $x <= 10; $x++){
             echo "$i x $x = ".($i*$x)."<br/>";
         }
        echo "</td>";
    }
echo "</tr>"; // Fin de Celdas 2

echo "</table>"; // Fin de la Tabla


?>