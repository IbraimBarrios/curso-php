<?php 
require_once("persona.php");
// Constructor y destructor

// Nota se le puede mandar valor al constructor por los parametros
$jose = new Persona("Carlos", "Lopez");

var_dump($jose->nombre);

$sofia = new Persona("Monica");
var_dump($sofia->nombre);
?>