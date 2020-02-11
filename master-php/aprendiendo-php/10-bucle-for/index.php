<?php
/*
BUCLE FOR

for(variable contador, condicion, incremento contador){
    instrucciones;
}

*/

$resultado=0;

for($i=0; $i<=500; $i++){
    $resultado += $i;
    echo "$resultado, ";
}
echo "<h1>El Resultado es: $resultado</h1>";
    
    //Ejemplo 2
echo '<br/>';
if (isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero=(int)$_GET['numero'];
}else{
    $numero=45;
}

echo "<h1>Table de Multiplicar del numero $numero</h1>";
$contador=0;

for($contador=0; $contador<=10; $contador++){
    if($numero==45){
        echo'No se puede procesar este numero';
        break;
    }
    echo $numero.' x '.$contador.' = '.($numero*$contador).'<br/>';
}

?>