<?php

class Cliente {
    public $nome;
    protected $cpf;
    private $telefone;

    public function __construct($nome, $cpf, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function mostrarDados() {
        echo "Nome: {$this->nome}<br>";
        echo "CPF: {$this->cpf}<br>";
        echo "Telefone: {$this->telefone}<br>";
    }
}

$cliente = new Cliente("Maria", "123.456.789-00", "99999-8888");

echo $cliente->nome . "<br>";
echo $cliente->getCpf() . "<br>";
echo $cliente->getTelefone() . "<br>";