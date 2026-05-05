<?php 
//Operadores logicos

// Operador and o &&
// Operador or o ||
// Operador xor, true si $a O $b es true, pero no ambos a la vez.
// Operador !
$edad = 17;
$es_mayor = $edad >= 18;

$regalo = "No";
$trae_regalo = $regalo == "Si";

var_dump($es_mayor and $trae_regalo);
var_dump($es_mayor or $trae_regalo);
var_dump($es_mayor xor $trae_regalo);

var_dump(!$es_mayor);


echo "Jose es mayor de edad: " . ($es_mayor ? 'Si' : 'No');
echo "Jose tienen $edad años, " . ($es_mayor ? 'Si' : 'No') . " es mayor de edad ";
?>