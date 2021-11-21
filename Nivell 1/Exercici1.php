<?php
//defineix una variable de cada tipus: integer,double,string i boolean
$numero1 = 3;
$numero2 = 25.59;
$text = "hola, com estàs?";
$valid = true;

//Imprimeix-les per pantalla
echo ("Variable de tipus Integer. Contingut: " . $numero1 . "\n");
echo ("Variable de tipus Double. Contingut: " . $numero2 . "\n");
echo ("Variable de tipus String. Contingut: " . $text . "\n");
echo ("Variable de tipus Boolean. Contingut: " . ($valid ? "true" : "false") . "\n");
?>