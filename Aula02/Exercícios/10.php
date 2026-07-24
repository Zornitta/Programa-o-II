<?php
class Pessoa {
    private string $nome;
    private int $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Meu nome é {$this->nome}, tenho {$this->idade} anos.<br>";
    }
}

$pessoas = [
    new Pessoa("João", 20),
    new Pessoa("Maria", 22),
    new Pessoa("Carlos", 25)
];

foreach ($pessoas as $pessoa) {
    $pessoa->apresentar();
}
?>