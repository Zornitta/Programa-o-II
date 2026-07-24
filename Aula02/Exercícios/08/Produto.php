<?php

class Produto{
    public $nome;
    public $preco;
    public $quantidade;


    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function valorTotal() {
        return $this->preco * $this->quantidade;
    }

    public function exibirDetalhes() {
        echo "Produto: {$this->nome}, Preço: R$ {$this->preco}, Quantidade: {$this->quantidade}, Valor Total: R$ {$this->valorTotal()}<br>";
    }
}
?>