<?php
require_once("persona.php");
 class Proveedor extends Persona {
  public function __construct(
    public string $cuenta = "", 
    public string $banco = "",
    ) {}

  public function productos() {

  }
 }
?>