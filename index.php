<?php 
// Arreglos multidimensional

$animales = [/*0*/["Puma", "Jaguar", "Lince"], /*1*/["Paloma","Pato","Tucan"], /*2*/["Serpiente","Cocodrilo","Tortuga"]];
$animales2 = [
  "Felinos" => ["Puma", "Jaguar", "Lince"], 
  "Aves" => ["Paloma","Pato","Tucan"],
  "Reptiles" => ["Serpiente","Cocodrilo","Tortuga"]
];

var_dump($animales[2][1]);
var_dump($animales2["Aves"][1]);


?>