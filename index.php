<?php 
// Funciones anónimas

// Nota: En funciones anonimas se puede usar variables externas
// con la palabra reservada use
$mensaje = "La suma es: ";

$suma = function($numero1, $numero2) use ( $mensaje) {
  $resultado =  $numero1 + $numero2;
  return "$mensaje $resultado";
};

echo $suma(100, 200);

$suma2 = function($numero1, $numero2) {
  return $numero1 + $numero2;
};

echo "La suma es: ", $suma2(10, 20);
?>