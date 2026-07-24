<?php

class Pessoa {
    public string $nome;
    public int $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function Apresentar() {
        echo "Meu nome é {$this->nome}, tenho {$this->idade} anos.<br>";
    }
}

$P1 = new Pessoa("João", 20);
$P2 = new Pessoa("Maria", 19);

$P1->Apresentar();
$P2->Apresentar();
?>