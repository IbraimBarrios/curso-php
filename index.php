<?php 
// Funciones en arreglos

$alumnos = ["Marines", "Jose", "Sofia", "Luis"];
$datos = [
  "nombre" => "Marines",
  "Apellido"=> "Mendez",
  "Edad" => 29,
  ];


  // Contar elementos de la lista
  // var_dump(count($alumnos));
  // var_dump(count($datos));

  // Ordenar elementos de la lista de manera ascendente
  asort($alumnos);
  asort($datos);

  // var_dump($alumnos);
  // var_dump($datos);

  // Ordenar de manera Descendente
  arsort($alumnos);
  arsort($datos);

  // var_dump($alumnos);
  // var_dump($datos);
  
  // Buscar 
  $index = array_search("Jose", $alumnos);
  $key = array_search(29, $datos);

  // var_dump($index);
  // var_dump($key);

  // Replazar, sustituye los elementos de un array por los de otro array
  $alumos_correcion = array_replace($alumnos, [
    0=> "Laura",
    1=> "Pepe",
  ]);

  $datos_correccion = array_replace($datos, [
    "Apellido" => "Cruz",
    "direccion" => "Allende"
  ]);

  var_dump($alumos_correcion);
  var_dump($datos_correccion);





?>