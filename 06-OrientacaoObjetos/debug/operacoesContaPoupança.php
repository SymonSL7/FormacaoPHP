<?php

    require __DIR__ . '/../vendor/autoload.php';

    use Ssl\OrientacaoObjetos\ContasTipo\ContaPoupanca;

    $conta = new ContaPoupanca('Banco Itaú', 'Symon Lima', '0001', '12345-6', 3000.00);

    echo $conta->obterSaldo();

    echo $conta->depositar(20000.00);

    echo $conta->obterSaldo();

    echo $conta->sacar(7500.00);

    echo $conta->obterSaldo();

    echo $conta->depositar(90000.00);

    echo $conta->obterSaldo();