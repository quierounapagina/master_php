<?php
/*
FUNCIONES: Es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilizarce solamente
invocando a la funcion tantas veces como queramos

function nombreDeMiFuncion (parametros){
    Bloque de instrucciones;
}

// Invocacion

nombreDeMiFuncion (parametro);

*/

// Ejemplo 1
//Construccion de la funcion
function muestraNombres (){
    echo "Jose <br/>";
    echo "Carlos <br/>";
    echo "Jesus <br/>";
    echo "Manuel <hr/>";
}

// Invocar

muestraNombres();

// Ejemplo 2

function tabla($numero){
    echo "<h3>Tabla de Multiplicar del numero: $numero</h3>";
        for ($i=1; $i<=10; $i++){
            $operacaion = $numero*$i;
            echo "$numero x $i = $operacaion <br/>";
        }
}


tabla(20);






?>