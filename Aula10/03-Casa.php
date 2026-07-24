<?php

class Comodo{
    private $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Casa{
    private $comodos = [];

    public function __construct($nomesComodos){
        foreach($nomesComodos as $nome){
            $this->comodos[] = new Comodo($nome);
        }
    }
    public function listarComodos(){
        echo "Cômodos da casa:<br>";
        foreach ($this->comodos as $comodo){
            echo $comodo->getNome() . "<br>";
        }
    }
}

$casa = new Casa(["Sala", "Cozinha", "Quarto", "Banheiro"]);
$casa->listarComodos();