<?php 
// Arreglos

$array = ["Jose", "Maria", "Monica"];
$array2 = [true, "Maria", 10, 12.9, [true, "Pepe"], "No", ["foo" => 1, "bar" => 2]];

echo $array[1];
echo $array[0];

// se obtiene el index del array
foreach ($array as $index => $nombre) {
  echo "Mi nombre es: ", $nombre, " index: ", $index;
};

?>