<?php 
//Operador Ternario (Operador) ? Operando: Operando
$promedio = 8;

$aprobo = ($promedio >= 7) ? "Aprobado": "Reprobado";

echo $aprobo;

// Operador elvis ?:
$promedio2 = "";

$aprobo2 = ($promedio2)?:"N/A";

echo $aprobo2;

// Operdor fusion null ??
$user = null;

$user = ($user) ?? "Invitado";

echo "Bienvenido: {$user}";
?>