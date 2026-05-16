<?php 
require_once("usuario.php");
$usuario = new Usuario(
  "Maria",
  "Lopez",
  "9876546379",
  20
);

$usuario->insertar();
$usuario->actualizar(2);
$usuario->remover(3);
var_dump($usuario->consultarUno(2));
?>