<?php 
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