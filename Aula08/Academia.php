<?php

class Aluno {
    private string $nome;
    private array $treinos = []; //Bidirecional

    public function __construct(string $nome){
        $this->nome = $nome;
    }

    public function getNome() : string{
        return $this->nome;
    }

    //Bidirecional
    public function inscreverTreino(Treino $treino){
        $this->treinos[] = $treino;
        $treino->adicionarAluno($this);
    }

    public function listarTreinos(){
        echo "Treinos do aluno {$this->nome}:<br>";
        foreach($this->treinos as $treino){
            echo "- " . $treino->getNome() . "<br>";
        }
    }

    //Dependência
    public function receberOrientacao(Instrutor $instrutor){
        echo "Aluno {$this->nome} está recebendo orientação do instrutor {$instrutor->getNome()}<br>";
    }
}

class Instrutor{
    private string $nome;
    private array $treinos = []; //Unidirecional

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    //Unidirecional
    public function adicionarTreino(Treino $treino){
        $this->treinos[] = $treino;
    }

    public function listarTreinos(){
        echo "Treinos ministrados pelo instrutor {$this->nome}:<br>";
        foreach($this->treinos as $treino){
            echo "- " . $treino->getNome() . "<br>";
        }
    }
}

Class Treino {
    private string $nome;
    private array $alunos = []; // Bidirecional

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    // Bidirecional
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

// Criando alunos
$aluno1 = new Aluno("João");
$aluno2 = new Aluno("Fabiano");
$aluno3 = new Aluno("Lucas");

// Criando instrutor
$instrutor = new Instrutor("Carlos");

// Criando treinos
$treino1 = new Treino("Musculação");
$treino2 = new Treino("Crossfit");
$treino3 = new Treino("Natação");

// Associação bidirecional (Aluno <-> Treino)
$aluno1->inscreverTreino($treino1);
$aluno2->inscreverTreino($treino1);
$aluno1->inscreverTreino($treino2);
$aluno3->inscreverTreino($treino3);

// Associação unidirecional (Instrutor -> Treino)
$instrutor->adicionarTreino($treino1);
$instrutor->adicionarTreino($treino2);
$instrutor->adicionarTreino($treino3);

// Dependência (Aluno -> Instrutor)
$aluno1->receberOrientacao($instrutor);

// Listagens
echo "<hr>";
$aluno1->listarTreinos();
echo "<br>";
$treino1->listarAlunos();
echo "<br>";
$treino2->listarAlunos();
echo "<br>";
$treino3->listarAlunos();
echo "<br>";
$instrutor->listarTreinos();