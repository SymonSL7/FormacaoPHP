<?php

    function f1() {
        echo '>F1 está antes da execução' . '<br/>';
    }

    function f2($int) {
        if(!is_int($int)) {
            throw new Exception("O valor não é um inteiro");
        }
        else {
            echo '>F2 está na execução' . '<br/>';
        }
        f3();
    }

    function f3() {
        echo '>F3 está depois da execução';
    }

    f1();
    f2(int: 5);

?>