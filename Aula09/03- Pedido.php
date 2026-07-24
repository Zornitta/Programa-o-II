<?php

class Produto{
    private $nome;
    private $preco;

    public function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Pedido{
    private $produtos = [];

    public function addProduto(Produto $produto){
        $this->produtos[] = $produto;
        echo "Produto '{$produto->getNome()}' adicionado ao pedido.<br>";
    }

    public function calcularTotal(){
        $total = 0;
        foreach($this->produtos as $produto){
            $total += $produto->getPreco();
        }
        return $total;
    }

    public function resumo(){
        echo "Resumo do pedido:<br>";
        foreach($this->produtos as $produto){
            echo "- {$produto->getNome()}: R$ " . number_format($produto->getPreco(), 2, ',' , '.') . ".<br>";
        }
        echo "Total: R$ " . number_format($this->calcularTotal(), 2, ',' , '.') . ".<br>";
    }
}

$pedido = new Pedido();

$p1 = new Produto("Notebook", 3500.00);
$p2 = new Produto("Mouse", 150.00);
$p3 = new Produto("Teclado", 250.00);

$pedido->addProduto($p1);  
$pedido->addProduto($p2);  
$pedido->addProduto($p3);  

$pedido->resumo();