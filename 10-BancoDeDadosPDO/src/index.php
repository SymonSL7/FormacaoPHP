<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list';
        
        echo "<h3>Produtos: </h3>";

        foreach ($produto->list() as $value) {

            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';

        }

        break;

    case 'insert';

        $status = $produto->insert($_GET['descricao']);
        
        if(!$status){

            echo 'Não foi possível inserir o produto.';
            return false;

        }

        echo "Produto inserido com sucesso.";

        break;

    case 'update';

        $status = $produto->update($_GET['descricao'], $_GET['id']);
        
        if(!$status){

            echo 'Não foi possível alterar o produto.';
            return false;

        }

        echo "Produto alterado com sucesso.";

        break;

    case 'delete';

        $status = $produto->delete($_GET['id']);

                if(!$status){

            echo 'Não foi possível adeletar o produto.';
            return false;

        }

        echo "Produto deletado com sucesso.";

        break;
        
}
