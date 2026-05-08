<?php 
// Recorrer arreglo multidimensional

$animales = [/*0*/["Puma", "Jaguar", "Lince"], /*1*/["Paloma","Pato","Tucan"], /*2*/["Serpiente","Cocodrilo","Tortuga"]];
$animales2 = [
  "Felinos" => ["Puma", "Jaguar", "Lince"], 
  "Aves" => ["Paloma","Pato","Tucan"],
  "Reptiles" => ["Serpiente","Cocodrilo","Tortuga"]
];

foreach ($animales2 as $key => $clasificacion) {
  foreach ($clasificacion as $animal) {
    echo $key, ": ", $animal, " ";
  }
}


?>