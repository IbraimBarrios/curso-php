<?php
require_once("core/crud.php");
class Usuario extends crud{
  public function __construct(
    public string $nombre = "",
    public string $apellido = "",
    public string $telefono = "",
    public int $edad = 0,
  ){
    parent::__construct("usuario");
  }

  public function insertar(){
    $this->crear("nombre,apellido,telefono,edad", "?,?,?,?", 
    [$this->nombre, $this->apellido, $this->telefono, $this->edad] );
  }

  public function actualizar(int $id) {
    $this->modificacion("nombre=?,edad=?", [$this->nombre, $this->edad, $id]);
  }

  public function remover(int $id){
    $this->delete($id);
  }

} 
?>