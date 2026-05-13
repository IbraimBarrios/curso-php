<?php
class Persona {
  public $nombre;
  private $apellido;
  public $edad;
  public $telefono;
  // Variable de instancia
  static $idioma;

  function hablar(string $tema){
    echo "Yo hablo de: $tema";
  }
  function ver(){

  }

  function cantar() {

  }
}
?>