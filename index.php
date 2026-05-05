<?php 
// Precedencia de Operadores o Gerarquias

$edad = 20;
$trae_credencial = "No";

// Nota: cuando se aga una comparacion y tenga Operadores de asignacion ==, <= entre otros
// es recomedable usar && por que tienen mas jerarquia que el and
$puede_votar = $edad >= 18 && $trae_credencial == "Si";

var_dump($puede_votar);

?>