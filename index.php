<?php 
require_once("persona.php");
// this
// Nota: Hace una referencia a la instancia actual

$jose = new Persona();
$jose->nombre = "Jose";
$jose->edad = 29;
echo $jose->nombre;
$jose->hablar("Musica");

$sofia = new Persona();
$sofia->nombre = "Sofia";
echo $sofia->nombre;
$sofia->hablar("Política");
?>