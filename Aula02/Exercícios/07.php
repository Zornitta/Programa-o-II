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

    public function Apresentar() {
        echo "Produto: {$this->nome}, Preço: R$ {$this->preco}, Quantidade: {$this->quantidade}, Valor Total: R$ {$this->valorTotal()}<br>";
    }
}
$P1 = new Produto("Arroz", 10.00, 5);
$P2 = new Produto("Feijão", 8.00, 3);
$P3 = new Produto("Macarrão", 5.00, 10);

$P1->Apresentar();
$P2->Apresentar();
$P3->Apresentar();

?>