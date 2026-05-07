<?php 
// match

// Nota: match solo puede regresar un valor en cada caso.
// No se puede realizar operaciones dentro del caso.

$camisa = "Negro";

echo match ($camisa) {
  "Gris" => "Encontre Camisa gris",
  "Amarillo"=> "Encontre Camisa Amarilla",
  "Rojo"=> "Encontre Camisa Roja",
  "Verde"=> "Encontre Camisa Verde",
  default => "No se encontro un color de camisa",
};

?>