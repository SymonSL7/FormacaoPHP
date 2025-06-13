<?php

    require __DIR__ . '/../vendor/autoload.php';

    use Ssl\OrientacaoObjetos\ContasTipo\ContaPoupanca;
    use Ssl\OrientacaoObjetos\Contratos\DadosContaBancariaInterface;
    use Ssl\OrientacaoObjetos\Contratos\OperacoesContaBancariaInterface;

    function executarOperacoes(OperacoesContaBancariaInterface $conta): void
    {
        echo $conta->obterSaldo();
        echo PHP_EOL;

        echo $conta->depositar(50);
        echo PHP_EOL;

        echo $conta->obterSaldo();
        echo PHP_EOL;

        echo $conta->sacar(30);
        echo PHP_EOL;

        echo $conta->obterSaldo();
        echo PHP_EOL;
    }

    function exibirDados(DadosContaBancariaInterface $conta): void
    {
        echo "Banco: " . $conta->getBanco();
        echo PHP_EOL;

        echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
        echo PHP_EOL;

        echo "Titular: " . $conta->getNomeTitular();
        echo PHP_EOL;

        echo "--------------------------------------------";
        echo PHP_EOL;
    }

    $conta = new ContaPoupanca(
        'Banco Itaú', // banco
        'Symon Lima', // nomeTitular
        '0001', // numeroAgencia
        '12345-6', // numeroConta
        20000 // saldo
    );

    exibirDados($conta);
    executarOperacoes($conta);