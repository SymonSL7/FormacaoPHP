<?php


    $data = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    
    echo $data->format('d-m-Y H:i:s');

    echo "\n";
    echo "\n";

    $intervaloDatas = new DateInterval('P1Y5M3DT1H5M');

    $data->add($intervaloDatas);

    echo $data->format('d-m-Y H:i:s');

  