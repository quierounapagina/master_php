<?php
/*Bucle WHILE
Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces como sea
necesario, en base a una condicion dada.

while (condicion){
    instrucciónes
}

Bucle DO WHILE
do{
    instruccion
}while(condicion);

*/

//Ejemplo 1

$numero=0;
while ($numero<=20){
    echo $numero.', ';
    $numero++;
}

echo '<hr/>';

//Ejemplo 2
if (isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero=(int)$_GET['numero'];
}else{
    $numero=1;
}

echo '<hr/>';
echo "<h1>Table de Multiplicar del numero $numero</h1>";
$contador=0;
while($contador<=10){
    echo $numero.' x '.$contador.' = '.($numero*$contador).'<br/>';
    $contador++;
}

echo '<hr/>';

$edad=16;
$contador=1;

do{
    echo 'Tienes Acceso al local privado'.$contador.'<br/>';
    $contador++;
}while($edad>=18 &&$contador <=10);
?>