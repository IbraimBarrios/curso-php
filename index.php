<?php 
// Ejemplo de un |> pipe en php
// Nota: |> el operador pipe no funciona aun en php

$name = "Pepe";
$name = strtoupper($name);
$name = strrev($name);

echo $name;

$name2 = "Marcos";
// $name_reverce = $name2 |> strtoupper() |> strrev(); ejemplo del operador pipe. en elixir
$name_reverce = strrev(strtoupper($name2));

echo $name_reverce;


?>