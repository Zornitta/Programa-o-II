<?php

class Turma{
    private $alunos = [];
    private $periodo;
    private $disciplina;

    public function __construct($periodo, $disciplina){
        $this->periodo = $periodo;
        $this->disciplina = $disciplina;
    }

    public function addAluno(Aluno $aluno){
        $this->alunos[] = $aluno;
    }

    public function listarAlunos(){
        foreach($this->alunos as $aluno){
            echo $aluno->getNome() . "<br>";
        }
    }
}

class Aluno{
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function getNome(){
        return $this->nome;
    }
}

$turma = new Turma("Noturno", "Prog II");

$aluno1 = new Aluno("Fabiano", 1);
$aluno2 = new Aluno("João", 2);
$aluno3 = new Aluno("Lucas", 3);

$turma->addAluno($aluno1);
$turma->addAluno($aluno2);
$turma->addAluno($aluno3);

$turma->listarAlunos();