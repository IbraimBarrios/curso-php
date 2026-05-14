<?php 
// cargar las rutas, de las instancias que se utilizan
// en este caso se utilizan 3: Cliente, Empleado, Proveedor.
require_once("autoload.php");
(new AutoCarga())->cargarRutas();


$cliente = new Cliente();

$claseAnonima = new class {
  public $nombre;

  function suma(){
    echo 4+6;
  }
};

$claseAnonima->suma();

?>