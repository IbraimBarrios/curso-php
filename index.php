<?php 
require_once("cliente.php");
// Clase apstracta
// con forme a la herencia los atributos y los metodos pueden ser accedidos desde los hijos

$cliente = new Cliente();

$cliente->nombre = "Paco";
$cliente->setTelefono("9373635243");
$cliente->comer();

?>