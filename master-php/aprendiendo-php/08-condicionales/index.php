<?php

/*
//Condicional IF:

if(condicion){
    instrucciones
}else{
    otras instrucciones
}

//Operadores de Coparación:

== Igual
=== Identico
!== No Identico
!= Diferente
<> Diferente
< Menor Que
> Mayor Que
<= Menor o igual que
>= Mayor o Igual que

//Operadores Logicos

&& And (Y)
|| OR (O)
? NOT (NO)
and (Y)
or (O)

*/
//Ejemplo1
$color='verde';

if($color == "rojo"){
    echo 'El Color el Rojo'.'<br/>';
}else{
    echo 'El Color NO es Rojo'.'<br/>';
}
// Ejempplo 2
$year=2021;

if ($year <= 2020){
    echo 'estamos en 2020 o antes'.'<br/>';
}else{
    echo 'estamos despues del 2020'.'<br/>';
}
//Ejemplo 3
$nombre= 'José Rivas';
$edad=33;
$ciudad='Caracas';
$continente='asia';
$mayoria_edad=18;

if($edad >= $mayoria_edad){
    echo $nombre.' es Mayor de Edad ';
    if($continente=='america'){
        echo 'y es de '.$ciudad.'<br/>';
    }else{
        echo ' y No es Americano'.'<br/>';
    }
    
}else{
    echo $nombre.' No es mayor de edad'.'<br/>';
}


//ejemplo 4
$dia=6;

if($dia==1){
    echo"es lunes";
}elseif($dia==2){
    echo"es martes";
}elseif($dia==3){
    echo'es miercoles';
}elseif($dia==4){
    echo'es jueves';
}elseif($dia==5){
    echo'es viernes';
}else{
    echo'es fin de semana';
}

echo'<hr/>';
    
//Ejemplo 5
    
$edad1=18;
$edad2=64;
$edad_oficial=65;

if($edad_oficial >= $edad1 && $edad_oficial<=$edad2){
    echo 'esta en edad de trabajar';
}else{
    echo 'no esta en edad de trabajar';
}

echo'<hr/>';

// Switch

$dia=1;

switch($dia){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 3:
        echo 'miercoles';
        break;
    default:
        echo 'Es otro dia';
}

echo'<hr/>';

// GOTO

goto marca;

echo '<h3>Instrucion 1</h3>';
echo '<h3>Instrucion 2</h3>';
echo '<h3>Instrucion 3</h3>';
echo '<h3>Instrucion 4</h3>';

marca:
echo 'Me he saltado 4 echos';



?>