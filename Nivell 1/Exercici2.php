<?php
//varible String benvinguda
$benvinguda = "Hello World!";
//imprimim per pantalla
echo ("Original: " . $benvinguda . "\n");
//Converteix el contingut de la variable a majuscules
echo ("MAJÚSCULES: " . strtoupper($benvinguda) . "\n");
//converteix el contingut de la variable a minuscules
echo ("minúscules: " . strtolower($benvinguda) . "\n");
//converteix el contingut de la variable en un string en ordre invers de caràcters
echo ("En ordre invers de caràcters: " . strrev($benvinguda) . "\n");
//longuitud (length) del contingut de la variable
echo ("Longuitud: " . strlen($benvinguda) . " caràcter(s)\n");
//creem una nova variable que contingui el text "Aquest és el curs de PHP"
//i imprimim la concatenació dels dos strings
$curs = "Aquest es el curs de PHP";
echo ($benvinguda . " " . $curs);
?>