<?php 
require_once("persona.php");
// Variables de instancia

$jose = new Persona();
$jose->nombre = "Jose";
$jose->edad = 29;
echo $jose->nombre;
$jose->hablar("Musica");

// Nota: Variable de instancia
// La variables de instancia si se modifican dentro de la clase.
// osea que el valor se guarda en la variable de la clase, no en la instancia
Persona::$idioma = "Español";
echo Persona::$idioma;

$sofia = new Persona();
$sofia->nombre = "Sofia";
echo $sofia->nombre;
$sofia->hablar("Política");
Persona::$idioma = "Ingles";
echo Persona::$idioma;

echo $jose->nombre;
echo $sofia->nombre;
echo Persona::$idioma;
?>