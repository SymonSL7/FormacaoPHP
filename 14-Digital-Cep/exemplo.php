<?php

    require_once "vendor/autoload.php";    

    use SSL\DigitalCep\Search;

    $busca = new Search;

    $resultado =  $busca->getAddresFromZipcode("01001000");

    print_r($resultado);