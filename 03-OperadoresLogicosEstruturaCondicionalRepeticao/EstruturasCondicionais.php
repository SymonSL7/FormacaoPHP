<?php

    $variavel1 = true;
    $variavel2 = false;
    $variavel3 = 0;

    if ($variavel1 === $variavel2 && $variavel3 === 5) {

        echo "As condições são verdadeiras!\n";

    } else if ($variavel1 === $variavel2 || $variavel3 === 5){

        echo "Somente uma das condições são verdadeiras!\n";

    } else {

        echo "Todas as condições são falsas!\n";

    }

    $nota = 7;

    echo $nota >= 7 ? "Aluno Aprovado!\n" : "Aluno Reprovado!\n";

?>