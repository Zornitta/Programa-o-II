<?php

class Contato{
    private $nome;
    private $telefone;
    private $email;


    public function __construct($nome = '', $telefone = '', $email = '') {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function exibirLista($indice) {
        echo "Contato " . ($indice + 1) . "<br>";
        echo "Nome: {$this->nome}<br>";
        echo "Telefone: {$this->telefone}<br>";
        echo "Email: {$this->email}<br>";
        echo "<br>";
    }
}

$listaContatos = [
    new Contato("João Tibes", 99989090, "joao.tibes@gmail.com"),
    new Contato("Ana Maria", 98034324, "ana.maria@outlook.com"),
    new Contato("Pedro Cardoso", 32442425, "p.cardoso@gmail.com"),
    new Contato("Bruna Santos", 99989090, "santosb@gmail.com")
];

foreach ($listaContatos as $indice => $contato){
    $contato->exibirLista($indice);
}