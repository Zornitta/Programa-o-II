<?php

class Disciplina{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Curso{
    private $disciplinas = [];

    public function addDisciplina(Disciplina $disciplina){
        $this->disciplinas[] = $disciplina;
        echo "Disciplina '{$disciplina->getNome()}' adicionada ao Curso.<br>";
    }

    public function exibirDisciplinas(){
        echo "Disciplinas:<br>";
        foreach($this->disciplinas as $index => $d){
            echo ($index + 1) . " - {$d->getNome()}<br>";
        }
    }
}

$curso = new Curso();

$d1 = new Disciplina("Português");
$d2 = new Disciplina("Matemática");
$d3 = new Disciplina("Inglês");

$curso->addDisciplina($d1);
$curso->addDisciplina($d2);
$curso->addDisciplina($d3);

$curso->exibirDisciplinas();