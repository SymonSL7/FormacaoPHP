<?php

    function divisao($dividendo, $divisor) {

        if ($divisor === 0 || $dividendo === 0) {

            throw new Exception("Em uma divisão nenhum dos dois valores poder ser zero!");

        }

        return $dividendo / $divisor;

    }


    try {
        $status = divisao(10, 0);
        echo $status;
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "\nFim da execução!";
        die();
    }