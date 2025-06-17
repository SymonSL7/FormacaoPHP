<?php

    function validarUsuario(array $usuario)
    {

        if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){

            throw new Exception("Campos obrigatórios não preenchidos");

        }

        return true;

    }

    $usuario = [

        'codigo' => 1,
        'nome' => '',
        'idade' => 27

    ];

    $status = false;

    try {
        $status = validarUsuario($usuario);
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "\nStatus da Operação " . (int)$status;
        die();
    }

    echo "\n ... executando ... \n";

