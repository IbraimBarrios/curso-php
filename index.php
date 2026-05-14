<?php 
require_once("cliente.php");
require_once("empleado.php");
// Type Hinting
// Nota: Poder enviar un argumento de tipo objeto a un metodo.

$cliente = new Cliente();

$cliente->nombre = "Paco";
$cliente->setTelefono("9373635243");
$cliente->comer();
$empleado = new Empleado();
$empleado->nombre = "Manuel";
$cliente->saludar($empleado);

?>