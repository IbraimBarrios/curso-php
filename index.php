<?php 
// Arreglos

// Agregar, Eliminar y Modificar datos en un arreglos con index y arreglos con llaves

$alumnos = ["Marines", "Joze", "Sofia"];
$datos = [
  "nombre" => "Marines",
  "Apellido"=> "Mendes",
  "Edad" => 29
  ];

  // agregar datos al arreglo normal y arreglo asociativo
  array_push($alumnos, "Luis");
  $datos['Colonia'] = "Alegria";

  
  var_dump($alumnos);
  var_dump($datos);

  // Editar datos en el arreglo
  $alumnos[1] = "Jose";
  $datos["Apellido"] = "Mendez";

  var_dump($alumnos);
  var_dump($datos);

  // Eliminar en arreglos
  unset($alumnos[1]);
  unset($datos["Apellido"]);

  var_dump($alumnos);
  var_dump($datos);


?>