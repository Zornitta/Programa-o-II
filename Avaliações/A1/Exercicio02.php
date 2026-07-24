<?php

class Produto{
    public $nome;
    private $preco;

    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->setPreco($preco);
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        if($preco > 0){
            $this->preco = $preco;
        }else{
            throw new Exception("Valor inválido!");
        }
    }

    public function Apresentar(){
        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ {$this->preco}<br>";
    }
}

$produto = new Produto("Tênis", 199,90);

$produto->setPreco(250.00);

$produto->Apresentar();
?>