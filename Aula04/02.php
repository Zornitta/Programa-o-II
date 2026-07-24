<?php

class Aluno{
    public $nome;
    private $matricula;
    private $notas = [];
    private $media;

    public function __construct($nome, $matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function adicionarNota($nota){
        $this->notas[] = $nota;
    }

    public function calcularMedia(){
        if(count($this->notas) > 0){
            $this->media = array_sum($this->notas) / count($this->notas);
        }
    }

    public function situacao(){
        if($this->media >= 7){
            return "Aprovado";
        }
        return "Reprovado";
    }
}

$aluno1 = new Aluno("João", 1);
$aluno2 = new Aluno("Maria", 2);

$aluno1->adicionarNota(8);
$aluno1->adicionarNota(7);
$aluno1->adicionarNota(6);

$aluno2->adicionarNota(5);
$aluno2->adicionarNota(6);
$aluno2->adicionarNota(7);

$aluno1->calcularMedia();
$aluno2->calcularMedia();

echo $aluno1->nome . ": " . $aluno1->situacao() . "<br>";
echo $aluno2->nome . ": " . $aluno2->situacao() . "<br>";
?>