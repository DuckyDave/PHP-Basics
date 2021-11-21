<?php

    function intercanviCaracters($text) {
        if (strlen($text) >= 1) {
            $primerCaracter = substr($text, 0, 1); 
            $ultimCaracter = substr($text, strlen($text) - 1);
            //intercanviem el primer caracter amb l'últim
            $textIntermedi = substr_replace($text, $ultimCaracter, 0, 1);
            //intercanviem l'ultim caracter amb el primer
            $nouText = substr_replace($textIntermedi, $primerCaracter, strlen($textIntermedi) - 1, 1);
            //retornem el nou string
            return ($nouText);
        }
    }

    /* si el nombre de paràmetres es igual a 2 (Exercici2.php text) */
    if($argc == 2) {
        $text = $argv[1];
        echo (intercanviCaracters($text) . "\n");
    /* en cas contrari ens avisa per pantalla */
    } else {
        echo "Per executar el programa has de introduir una cadena de caracters" . "\n";
        echo "Per exemple: php Exercici2.php xwyz" . "\n";
    }
    
?>