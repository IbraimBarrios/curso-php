<?php
class Persona {
  public $nombre;
  private $apellido;
  public $edad;
  public $telefono;
  // Variable de instancia
  static $idioma;

  function hablar(string $tema){
    echo "Yo soy ",$this->nombre, " y hablo de: $tema";
  }
  function ver(){

  }

  function cantar() {

  }
}
?>