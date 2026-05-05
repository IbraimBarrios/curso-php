<?php 
//Operadores de comparación
// Operador igual ==
// Operador identico ===
// Operador diferente !=
// Operador diferente <>
// Operador no identico !== 
$raza = "Husky";
$edad = "10";
$edad2 = 20;

var_dump($raza == "Akita");
var_dump($edad === 10);
var_dump($edad2 != 10);
var_dump($edad2 <> 10);
var_dump($edad2 !== "28");


// Operador Mayor que >
// Operador Mayor o igual que >=
// Operador Menor que <
// Operador Menor o igual que <=
$edad3 = 18;
$edad4 = 6;

var_dump($edad3 > 18);
var_dump($edad3 >= 18);
var_dump($edad4 < 6);
var_dump($edad4 <= 6);

/* Operador de nave espacial <=>
0 Ambos valores son iguales
-1 El valor es menor
1 El valor es mayor
*/

$edad5 = 6;
$edad6 = 3;
$edad7 = 7;
var_dump($edad5 <=> 6);
var_dump($edad6 <=> 6);
var_dump($edad7 <=> 6);

?>