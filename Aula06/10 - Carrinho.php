<?php

class CarrinhoCompras{
    private $total;

    public function __construct()
    {
        $this->total = 0;
        echo "Carrinho está com um total de R$ 0,00.<br>";
    }

    public function addValor($valor){
        if($valor > 0){
            $this->total += $valor;
            echo "Adicionado R$ " . number_format($valor, 2, ',', '.') . " ao carrinho.<br>";
        } else{
            echo "Valor inválido, Deve ser maior que zero.<br>";
        }
    }

    public function exibirTotal(){
        echo "Total acumulado: R$ " . number_format($this->total, 2, ',', '.') . ".<br>";
    }
}

$carrinho = new CarrinhoCompras();
$carrinho->addValor(49.90);
$carrinho->addValor(25.50);
$carrinho->exibirTotal();