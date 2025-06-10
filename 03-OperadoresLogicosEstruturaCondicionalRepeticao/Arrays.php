<?php 

    $carros = ['Ferrari', 'BMW', 'Mercedes'];

    $endereco = [

        'cep' => "123456",
        'numero' => '75',
        'cidade' => 'Belo Horizonte',
        'estado' => 'Minas Gerais'

    ];

    print_r($carros[1]);

    echo "\n";

    print_r($endereco['cidade']);

    echo "\n";

    $EnderecoPessoa = [
        'pessoa1' => array(
            'cep' => '123456',
            'cidade' => 'Salvador'
        ),
        'pessoa2' => array (
            'cep' => '879854',
            'cidade' => 'São Paulo'
        ),
        ];

    print_r($EnderecoPessoa['pessoa1']['cidade']);
?>