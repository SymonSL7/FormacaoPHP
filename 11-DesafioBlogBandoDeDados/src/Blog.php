<?php

declare(strict_types=1);

class Blog
{

    private PDO $conexao;

    public function __construct()
    {

        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=bdBlog', 'root', 'mysql');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function listar()
    {

        $sql = 'select * from noticias';

        $noticias = [];

        foreach ($this->conexao->query($sql) as $key => $value) {

            array_push($noticias, $value);
        }

        return $noticias;

    }

    public function insert(string $titulo, string $descricao): int
    {

        $sql = 'insert into noticias(titulo, descricao) values(?, ?)';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $descricao);

        $prepare->execute();

        return $prepare->rowCount();

    }

    public function update(string $titulo, string $descricao, int $id): int
    {

        $sql = 'update noticias set titulo = ?, descricao = ? where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $titulo);
        $prepare->bindParam(2, $descricao);
        $prepare->bindParam(3, $id);

        $prepare->execute();

        return $prepare->rowCount();

    }

    public function delete(int $id): int
    {

        $sql = 'delete from noticias where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $id);

        $prepare->execute();

        return $prepare->rowCount();

    }

}
