<?php
// abstract
// Nota: clase principal o clase padre que no puede ser instancia directa(nos se puede crear objetos en ella).

abstract class Persona {
  // Variable de instancia
  static $idioma;

  // Constructor v8: se usa para inicializar datos
  public function __construct(
    public string $nombre = "",
    private string $apellido = "",
    //Nota: el atributo puede aseptar otros tipos de datos, apartir de la vercion 8 de php
    public int|float $edad = 0,
    private string $telefono = "",
  ){}

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

  // Ejemplo de polimorfismo: Sobre carga de funciones
  // Nota: Son funciones con mismo nombre pero con mas de un parametro
  // public function hablar($tema, $valor){

  // }

  function ver(){

  }

  function cantar() {

  }
// Encapsulamiento: Metodos privados. solo se accede desde la misma clase.
  private function tema_es_extenso($tema){
    return ($tema== "Política") ? "Tema extenso" : "Tema no extenso";
  }

  protected function validarTelefono($telefono) {
    if (preg_match('/^[0-9]{10}$/', $telefono)) {
      return $telefono;
    } else {
      return "Estructura incorecta";
    }
  }

  public function __destruct()
  {
    echo "Fin del objeto";
  }

}

?>