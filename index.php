<?php 
$nombre_completo = "Jose Mendez Cruz";
$apellido_paterno = substr($nombre_completo,5,6);

$apellido2 = substr("MarinesMG",0,-2);

echo $apellido_paterno;
echo $apellido2;

$bienvenida = "Bienvenido al mundo de la programacion";
$palabra = "programacion";

$posicion_de_palabra = strpos($bienvenida,$palabra);
$palabra_buscada = substr($bienvenida,$posicion_de_palabra);
echo $posicion_de_palabra;
echo $palabra_buscada;

?>