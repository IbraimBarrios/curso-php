<?php 

$saludo = "Hola";
//Heredoc
echo <<<Frase
$saludo
"No cuentes los dias", haz que los dias cuenten. 'Bye!'
Frase;

$text = <<<Texto
Este es un Texto
Texto;

echo $text;

//Nowdoc
// Nota: no muestra variables, solo es texto
echo <<<'Frase'
@$saludo
No cuentes los dias", haz que los dias cuenten. 'Bye!
Frase;
?>