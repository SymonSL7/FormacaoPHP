<?php

require 'Blog.php';

$noticia = new Blog();

switch ($_GET['operacao']) {

    case 'list';
        
        echo "<h3>Noticias: </h3>";

        foreach ($noticia->listar() as $value) {

            echo 'Id: ' . $value['id'] . 
            '<br> Titulo: ' . $value['titulo'] . 
            '<br> Descrição: ' . $value['descricao'] . '<hr>';

        }

        break;

    case 'insert';

        $status = $noticia->insert($_GET['titulo'],$_GET['descricao']);
        
        if(!$status){

            echo 'Não foi possível publicar a noticias.';
            return false;

        }

        echo "Noticia publicada com sucesso!";

        break;

    case 'update';

        $status = $noticia->update($_GET['titulo'],$_GET['descricao'], $_GET['id']);
        
        if(!$status){

            echo 'Não foi possível alterar a noticia.';
            return false;

        }

        echo "Noticia alterada com sucesso.";

        break;

    case 'delete';

        $status = $noticia->delete($_GET['id']);

                if(!$status){

            echo 'Não foi possível excluir a noticia.';
            return false;

        }

        echo "Noticia deletada com sucesso.";

        break;
        
}
