<?php


class Pessoa {
    private string $nome;
    private int $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function aniversario(){
        $this->idade++;
        return $this->idade;
    }

    public function Apresentar() {
        echo "Meu nome é {$this->nome}, tenho {$this->idade} anos.<br>";
    }
}

$P1 = new Pessoa("João", 20);
$P2 = new Pessoa("Maria", 19);

$P1->Apresentar();
$P2->Apresentar();
echo $P1->aniversario();
echo $P2->aniversario();


?>