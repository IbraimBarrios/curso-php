<?php
class Persona {
  public $nombre;
  private $apellido;
  public $edad;
  public $telefono;

  function hablar(string $tema){
    echo "Yo hablo de: $tema";
  }
  function ver(){

  }

  function cantar() {

  }
}
?>