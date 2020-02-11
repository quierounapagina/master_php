<?php
//Operadores Aritmeticos

$numero1 = 65;
$numero2 = 33;

echo 'suma: '.($numero1 + $numero2).'<br/>';
echo 'resta: '.($numero1 - $numero2).'<br/>';
echo 'multiplicación: '.($numero1 * $numero2).'<br/>';
echo 'division: '.($numero1 / $numero2).'<br/>';
echo 'resto: '.($numero1 % $numero2).'<br/>';

//Operadores de Incremento y Decremento

$year = 2020;
echo 'Año sin Incrementos';
echo '<h3>'.$year.'</h3>';
$year++;
echo 'Año con incremento $variable++';
echo '<h3>'.$year.'</h3>';
$year = 2020;
$year--;
echo 'Año con decremento $variable--';
echo '<h3>'.$year.'</h3>';
$year = 2020;
++$year;
echo 'Año con incremento ++$variable';
echo '<h3>'.$year.'</h3>';
$year = 2020;
--$year;
echo 'Año con decremento --$variable';
echo '<h3>'.$year.'</h3>';

//Operadores de Asignación

$edad=55;

echo $edad.'<br/>';
//$edad = $edad +5 (Simplificado) Puedes hacer lo mismo con la resta, la multipicación, la Division y resto
echo $edad+=5;



?>