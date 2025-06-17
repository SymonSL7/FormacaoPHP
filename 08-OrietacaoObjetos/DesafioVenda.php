<?php

    declare(strict_types=1);

    class Venda
    {

        private string $data;
        private string $produto;
        private int $quantidade;
        private float $valorUnitario;
        private float $valorTotal;

        public function __construct(
            string $data, 
            string $produto, 
            int $quantidade, 
            float $valorUnitario,
            
        )
      
        {
            
            $this->data = $data;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->valorUnitario = $valorUnitario;

        }

                private function calcularValorTotal(): float 
        {

            $this->valorTotal = $this->quantidade * $this->valorUnitario;
            return $this->valorTotal;

        }

        public function exibirDadosDaCompra(): void
        {

            echo 
            "Data da venda: " . $this->data . "\n" .
            "Produto: " . $this->produto . "\n" .
            "Quantidade: " . $this->quantidade . "\n" .
            "Valor total: " . $this->calcularValorTotal() . "\n";
            
        }

    }

    $venda1 = new Venda('16/06/2025', 'Monitor 23 Polegadas', 1, 759.90);
    $venda1->exibirDadosDaCompra();

    echo "\n";

    $venda2 = new Venda('17/06/2025', 'Fone De Ouvido', 2, 130.99);
    $venda2->exibirDadosDaCompra();

?>
