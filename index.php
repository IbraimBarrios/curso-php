<?php 
$RFC = "91 75 1A EC C7";
$buscar = " ";
$remplazar = ":";

$resultado = str_replace($buscar, $remplazar, $RFC);
echo $resultado;


$anio = "1994";
$mes = "01";
$dia = "21";
$formato = "%s-%s-%s";

echo sprintf($formato, $dia, $mes, $anio);

?>