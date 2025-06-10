<?php

    $arr = [1,2,3,4,5,6,7,8,9,10];

    $qtdArray = count($arr);

    foreach ($arr as $i => $value) {

        echo "O valor do índice: (". $i . ") valor contido na posição: " . $value . "\n";

    }

    echo "\n";

    foreach ($arr as $i => $value) {

        if($value === 6) {
            break;
        }
        
        echo "O valor do índice: (". $i . ") valor contido na posição: " . $value . "\n";

    }

    echo "\n";

    foreach ($arr as $i => $value) {

        if($value % 2 === 0) {
            continue;
        }
        
        echo "O valor do índice: (". $i . ") valor contido na posição: " . $value . "\n";

    }

?>