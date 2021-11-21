<?php
$llista5 = array(25, 45, 78, 63, 52);
$llista3 = array(35, 48, 92);
//afegim un nou element al final de la segona array
array_push($llista3, 138);
//nova variable de tipus array, resultat de mesclar les dues anteriors
$llista = array_merge($llista5, $llista3);
//aqust mètode retorna el nombre d'elements que es troben a dins d'una array
echo ("Numero total d'elements: " . (count($llista)) . "\n");
//imprimim per pantalla els valors de l'array, d'un en un
echo ("Llista de numeros enters\n");
for ($i = 0; $i < count($llista); $i++) {
    echo ($llista[$i] . "\n");
}
?>