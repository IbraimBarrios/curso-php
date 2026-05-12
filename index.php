<?php 
// funciones: Tipado en funciones

// Nota: El Modo Estricto: obliga al intérprete a coincidir exactamente con los tipos de datos 
// declarados en funciones y retornos, eliminando la coerción automática de tipos
declare(strict_types=1); // Modo estricto
function obtener_edad(int $anio, int $anio_actual = 2026) {
  $edad = $anio_actual - $anio;
  return $edad;
}

$edad = obtener_edad(1996, 2010);
echo "Mi edad es: $edad";

obtener_edad(2000);

?>