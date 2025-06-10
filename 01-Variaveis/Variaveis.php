<?php

    $texto = "<h1>Curso de PHP</h1>";

    var_dump($texto);

    $numero = 10;

    var_dump($numero);

    $numeroDecimal = 10.5;

    var_dump($numeroDecimal);

    $x = $numero +  $numeroDecimal;

    var_dump($x);

    echo date("d/m/y\n");

    echo date("d/M/Y\n");

    date_default_timezone_set("America/Sao_Paulo");

    echo date("H:i:s\n");

    echo date("d/m/Y H:i:s");

?>