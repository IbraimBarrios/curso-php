<?php 
require_once("cliente.php");
require_once("empleado.php");
// Polimorfismo
// Nota: existen 2 tipos, sobre carga de funciones y anulación de funciones
// 1- sobre carga de funciones, se realiza en tiempo de compilación. PHP no admite este tipo.
// 2- anulación de funiones

$cliente = new Cliente();

$cliente->nombre = "Paco";
$cliente->setTelefono("9373635243");
$cliente->comer();
$empleado = new Empleado();
$empleado->nombre = "Manuel";
$cliente->saludar($empleado);
$cliente->hablar("Pop")

?>