<?php

    declare(strict_types=1);

    class ContaBancaria
    {
        
        private string $banco;
        private string $nomeTitular;
        private string $numeroAgencia;
        private string $numeroConta;
        private float $saldo;

        public function __construct(
           
            string $banco,
            string $nomeTitular,
            string $numeroAgencia,
            string $numeroConta

        )
        {

            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroAgencia = $numeroAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = 0;

        }

        public function obterSaldo(): string
        {
           
            return "O saldo atual é: " . $this->saldo . "\n";

        }

        public function depositar(float $valorDeposito): void
        {

            $this->saldo += $valorDeposito;

        }

        public function sacar(float $valorSaque): void
        {

            $this->saldo -= $valorSaque;

        }

    }

    $conta = new ContaBancaria('Banco Itaú', 'Symon Lima', '0001', '2025061-6');

    echo $conta->obterSaldo();

    $conta->depositar(1000);

    echo $conta->obterSaldo();

    $conta->sacar(750);

    echo $conta->obterSaldo();


    /**
    * @var string
    */
    $nome = 123;

    echo $nome;