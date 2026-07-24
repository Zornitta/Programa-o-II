<?php

class Item{
    public $nome;
    public $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPreco(){
        return $this->preco;
    }
}

class Carrinho{
    private $itens = [];

    public function adicionarItem($item){
        $this->itens[] = $item;
    }

    public function somaTotal(){
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->preco;
        }
        return $total;
    }

    public function listarItens(){
        foreach($this->itens as $item){
            echo "Item: {$item->nome}, Preço: R$ {$item->preco}<br>";
        }
    }
}

$item1 = new Item("Camiseta", 49,90);
$item2 = new Item("Calça", 59.90);
$item3 = new Item("Bermuda", 45.90);
$item4 = new Item("Jaqueta", 129.90);

$carrinho = new Carrinho();
$carrinho->adicionarItem($item1);
$carrinho->adicionarItem($item2);
$carrinho->adicionarItem($item3);
$carrinho->adicionarItem($item4);

$carrinho->listarItens();
echo "Total: R$ " . $carrinho->somaTotal();