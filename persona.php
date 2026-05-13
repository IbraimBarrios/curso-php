<?php
class Persona {
  public $nombre;
  private $apellido;
  public $edad;
  public $telefono;
  // Variable de instancia
  static $idioma;

  public function hablar(string $tema){
    echo "Yo soy ",$this->nombre, " y hablo de: $tema ", $this->tema_es_extenso($tema);
  }

  function ver(){

  }

  function cantar() {

  }
// Encapsulamiento: Metodos privados. solo se accede desde la misma clase.
  private function tema_es_extenso($tema){
    return ($tema== "Política") ? "Tema extenso" : "Tema no extenso";
  }
}

?>