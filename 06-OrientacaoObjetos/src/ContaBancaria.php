<?php

declare(strict_types=1);

namespace Ssl\OrientacaoObjetos;

abstract class ContaBancaria
{

    protected string $banco;
    protected string $nomeTitular;
    protected string $numeroAgencia;
    protected string $numeroConta;
    protected float $saldo;

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    )
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getBanco(): string
    {
        return $this->banco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function depositar(float $valor): string {

        $this->saldo += $valor;

        return "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado!\n";

    }

    public function sacar(float $valor): string {

        $this->saldo -= $valor;

        return "Saque de R$ " . number_format($valor, 2, ',', '.'). " realizado!\n";

    }

    public abstract function obterSaldo(): string;


}
