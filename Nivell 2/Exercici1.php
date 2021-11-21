<?php

    function suma($n1, $n2) {
        return $n1 == $n2 ? (2 * ($n1 + $n2)) : ($n1 + $n2);
    }

    /* si el nombre de paràmetres es igual a 3 (Exercic1.php num1 num2) */
    if($argc == 3) {
        $num1 = $argv[1];
        $num2 = $argv[2];
        echo (suma($num1, $num2) . "\n");
    /* en cas contrari ens avisa per pantalla*/
    } else {
        echo "Per executar el programa has de introduir dos numeros enters separats per un espai" . "\n";
        echo "Per exemple: php Exercici1.php 12 34". "\n";
    }
?>