<?php

declare(strict_types=1);

namespace Ssl\OrientacaoObjetos\ContasTipo;

use Ssl\OrientacaoObjetos\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
    }

    public function obterSaldo(): string
    {
        $this->saldo += ($this->saldo * self::RENDIMENTO);
        return 'Seu saldo atual é: R$ ' . number_format(($this->saldo), 2, ',', '.') . "\n";
    }
}