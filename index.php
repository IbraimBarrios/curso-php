<?php 
// If else

$promedio = 5;
$tiene_faltas = "No";

if ($promedio >= 6 && $tiene_faltas == "No") {

  echo "Aprobo la materia";
} else if ($tiene_faltas == "Si") {
  echo "Reprobo por faltas";
} else {
  echo "Reprobo materia";
}

echo ($promedio >= 6 && $tiene_faltas == "NO") ? "Aprobado":"Reprobado";

?>