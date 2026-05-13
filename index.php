<?php 
require_once("persona.php");
// this
// Nota: Hace una referencia a la instancia actual

$jose = new Persona();
$jose->nombre = "Jose";

// ejemplo1: get y set normal
$jose->setTelefono("9336462780");
echo $jose->getTelefono();

// Ejemplo2: __get y __set magicos
$jose->__set("telefono","0932399870");
echo $jose->__get("telefono");

$sofia = new Persona();
$sofia->nombre = "Sofia";
echo $sofia->nombre;
$sofia->hablar("Política");
?>