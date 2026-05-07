<?php 
// Arreglos asociativos

$datos = [
  "name" => "marines",
  "apellido" => "Mendez",
  "edad" => 29
];

var_dump($datos['apellido']);

foreach ($datos as $key =>  $valor) {
  echo $key, " = ", $valor;
}
?>