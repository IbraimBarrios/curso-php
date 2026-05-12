<?php 
// funciones: Parámetros y argumentos 

// $anio = 1996;
function obtener_edad($anio, $anio_actual = 2026){
  $edad = $anio_actual - $anio;
  echo "Mi edad es: $edad";
}

obtener_edad(1996, 2010);
obtener_edad(2000);

?>