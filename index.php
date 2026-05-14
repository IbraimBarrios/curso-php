<?php 
// cargar las rutas, de las instancias que se utilizan
// en este caso se utilizan 3: Cliente, Empleado, Proveedor.
require_once("autoload.php");
(new AutoCarga())->cargarRutas();


$cliente = new Cliente();

$cliente->nombre = "Paco";
$cliente->setTelefono("9373635243");
$cliente->comer();
$empleado = new Empleado();
$proveedor = new Proveedor();
$empleado->nombre = "Manuel";
$cliente->saludar($empleado);
$cliente->hablar("Pop")

?>