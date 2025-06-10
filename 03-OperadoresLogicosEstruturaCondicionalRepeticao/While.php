<?php

    $frutas = ["banana", "maçã", "pera", "uva"];

    $contador = count($frutas);


    $i = 0;
    while ($i < $contador) {
        echo $frutas[$i] . "\n";
        $i++;
    }

    echo "\n";


    $i = 0;
    while ($i < $contador) {
        echo $frutas[$i] . "\n";
        
        if ($frutas[$i] === "pera"){
            break;
        }
        
        $i++;
    }

    echo "\n";


    $i = 0;
    while ($i < $contador) {
        if ($frutas[$i] === "maçã"){
            $i++;
            continue;
        }
        
        echo $frutas[$i] . "\n";
        $i++;
    }

    echo "\n";

    $i = 2;

    do {
        
        echo $frutas[$i] . "\n";

        $i++;

    } while ($i < $contador);

?>
