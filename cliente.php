<?php
require_once("persona.php");
require_once("empleado.php");
class Cliente extends Persona {
  public function __construct(
    public bool $frecuente = false,
    public string $correo = "",
   ) {}

  public function comer(){
    $telefono = $this->getTelefono();
    echo $this->validarTelefono($telefono);
  }

  function saludar(Empleado $empleado) {
    echo "Felicidades chef ", $empleado->nombre;
  }
} 
?>