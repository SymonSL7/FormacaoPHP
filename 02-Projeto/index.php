<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP</title>
</head>
<body>

    <?php

        $string = "Curso na DIO";

        $numeros = 50;

        $array = ["Java", "PHP", "Python"];

        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d/m/Y H:i:s");

    ?>

    <h4>
        
        Essa é uma variavel do tipo string, 
        para implementar uma variavel do tipo string, 
        basta colocar o nome da variavel e o valor entre aspas (Simples ou Duplas):
        
        <?php
        echo $string;
        ?>
    
    </h4>

    <h4>
        Essa é uma variavel do tipo números/integer
        para implementar essa variavel utilizamos somente os números,
        desta forma:

        <?php
        echo $numeros;
        ?>

    </h4>

    <h4>
        Esssa é uma variável com um array, para implementar umm array,
        em uma variável utilizamos desta forma:

        <?php
        print_r($array);
        ?>

    </h4>

    <h4>
        Essa é uma variável do tipo data, para implementar uma variável do tipo data,
        utilizamos a função date(), desta forma:

        <?php
        print $data;
        ?>

    </h4>

</body>
</html>