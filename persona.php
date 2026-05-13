<?php
class Persona {
  public $nombre;
  private $apellido;
  public $edad;
  private $telefono;
  // Variable de instancia
  static $idioma;

  // Get y Set
  public function getTelefono() {
    return $this->telefono;
  }

  public function setTelefono($telefono) {
    $this->telefono =  $this->validarTelefono($telefono);
  }

  // Metodos magicos __get y __set, las propiedadesson dimamicas
  public function __get($name)
  {
    return $this->$name;
  }

  public function __set($name, $value) {
    switch ($name) {
      case "telefono":
        return $this->$name = $this->validarTelefono($value);
      default:
        return $this->$name = $value;
    }
  }

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

  private function validarTelefono($telefono) {
    if (preg_match('/^[0-9]{10}$/', $telefono)) {
      return $telefono;
    } else {
      return "Estructura incorecta";
    }
  }

}

?>