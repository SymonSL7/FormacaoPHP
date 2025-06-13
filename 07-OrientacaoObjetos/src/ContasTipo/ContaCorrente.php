<?php
declare(strict_types=1);

namespace Ssl\OrientacaoObjetos\ContasTipo;

use Ssl\OrientacaoObjetos\ContaBancaria;

class ContaCorrente extends ContaBancaria
{
    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

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
        $this->saldo -= self::TAXA;
        return 'Seu saldo atual é: R$ ' . number_format($this->saldo, 2, ',', '.') . "\n";
    }

}
