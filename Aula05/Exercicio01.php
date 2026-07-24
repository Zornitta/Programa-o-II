<?php

class Produto{
    public $nome;
    public $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function Apresentar(){
        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ {$this->preco}<br>";
    }
}

$produto = new Produto("Tênis", 129.90);

$produto->Apresentar();
?>