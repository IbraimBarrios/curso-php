<?php 
// funciones: Return 

function obtener_edad($anio, $anio_actual = 2026) {
  $edad = $anio_actual - $anio;
  return $edad;
}

$edad = obtener_edad(1996, 2010);
echo "Mi edad es: $edad";

obtener_edad(2000);

?>