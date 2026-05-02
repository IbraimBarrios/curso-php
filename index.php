<?php 
//variables y tipos de datos
$nombre = "Jose";
echo gettype($nombre);
$edad = 10;
$nombre = 10;
echo gettype($nombre);

// nota: suma automatica, php reconoce que es un calculo
$numero = "20";
$numero2 = "10";

$suma = $numero + $numero2;
echo $suma;

// calculo normal
$valor = 20.5;
$valor2 = 10;
$suma2 = $valor + $valor2;
echo $suma2;
?>