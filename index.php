<?php 
require_once("cliente.php");
require_once("persona.php");
// Herencia
// Nota: con protected, hace que el metodo lo puedan usar en clase padre y clases hijos,
// no en las instancias. 

$cliente = new Cliente();
$persona = new Persona();

$cliente->nombre = "Paco";
$cliente->setTelefono("9373635243");
$cliente->comer();

?>