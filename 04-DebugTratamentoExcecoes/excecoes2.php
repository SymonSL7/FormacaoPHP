<?php

function divisao($dividendo, $divisor)
{

    try {

        if ($divisor === 0) {

            throw new RangeException("O número não pode ser dividido por zero");
        }

        $resultado = $dividendo / $divisor;

        echo "O resultado da divisão é: $resultado";
    } catch (Exception) {
        // echo $e->getMessage();
        echo "O número não pode ser dividido por zero";
    } finally {
        echo "</br>" . "Tratando exceções";
    }
}

divisao(10, 0);
