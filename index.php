<?php 
require_once("cliente.php");
require_once("empleado.php");
// Polimorfismo
// Nota: mecanismo de reutilización de codigo en lenguaje de herencia simple.

$cliente = new Cliente();

$cliente->nombre = "Paco";
$cliente->setTelefono("9373635243");
$cliente->comer();
$empleado = new Empleado();
$empleado->nombre = "Manuel";
$cliente->saludar($empleado);
$cliente->hablar("Pop")

?>