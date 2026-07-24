<?php
//Associação Bidirecional entre duas classes (Aluno e Treino)

//Treino e Aluno tem uma associação bidirecional por que ambos se conhecem e necessitam um do outro para funcionar.

class Aluno {
    private string $nome;
    private array $treinos = [];

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome() : string{
        return $this->nome;
    }

    //inscrição do aluno no treino
    public function inscreverTreino(Treino $treino){
        $this->treinos[] = $treino;
        $treino->adicionarAluno($this);
    }

    public function listarTreinos(){
        echo "Treinos do aluno {$this->nome}: <br>";
        foreach($this->treinos as $treino){
            echo "- " . $treino->getNome() . "<br>";
        }
    }
}

Class Treino {
    private string $nome;
    private array $alunos = [];

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    //Adiciona o aluno no treino
    public function adicionarAluno(Aluno $aluno) {
        if (!in_array($aluno, $this->alunos)) {
            $this->alunos[] = $aluno;
        }
    }

    public function listarAlunos() {
        echo "Alunos inscritos no treino {$this->nome}:<br>";
        foreach ($this->alunos as $aluno) {
            echo "- " . $aluno->getNome() . "<br>";
        }
    }
}


//implementação
$t1 = new Treino("Musculação");
$t2 = new Treino("Natação");
$t3 = new Treino("Funcional");

$a1 = new Aluno("João");
$a2 = new Aluno("Maria");
$a3 = new Aluno("Marcos");

$a1->inscreverTreino($t1);
$a2->inscreverTreino($t2);
$a3->inscreverTreino($t3);

$a1->listarTreinos();
$a2->listarTreinos();
$a3->listarTreinos();

echo "<br>";

$t1->listarAlunos();
$t2->listarAlunos();
$t3->listarAlunos();