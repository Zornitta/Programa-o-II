<?php
/**
 * Mini-Sistema de Academia
 * Exemplo de Associações em PHP
 */

// ----------------------
// Classe Aluno
// ----------------------
class Aluno {
    private string $nome;
    private array $treinos = []; // Associação bidirecional

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    // Associação bidirecional: Aluno <-> Treino
    public function inscreverTreino(Treino $treino) {
        $this->treinos[] = $treino;
        $treino->adicionarAluno($this);
    }

    public function listarTreinos() {
        echo "Treinos do aluno {$this->nome}:<br>";
        foreach ($this->treinos as $treino) {
            echo "- " . $treino->getNome() . "<br>";
        }
    }

    // Dependência: Aluno recebe orientação de um Instrutor
    public function receberOrientacao(Instrutor $instrutor) {
        echo "Aluno {$this->nome} está recebendo orientação do instrutor {$instrutor->getNome()}<br>";
    }
}

// ----------------------
// Classe Instrutor
// ----------------------
class Instrutor {
    private string $nome;
    private array $treinos = []; // Unidirecional

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    // Associação unidirecional: Instrutor -> Treino
    public function adicionarTreino(Treino $treino) {
        $this->treinos[] = $treino;
    }

    public function listarTreinos() {
        echo "Treinos ministrados pelo instrutor {$this->nome}:<br>";
        foreach ($this->treinos as $treino) {
            echo "- " . $treino->getNome() . "<br>";
        }
    }
}

// ----------------------
// Classe Treino
// ----------------------
class Treino {
    private string $nome;
    private array $alunos = []; // Associação bidirecional

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    // Associação bidirecional: Treino <-> Aluno
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

// ----------------------
// Teste do Mini-Sistema
// ----------------------

// Criando alunos
$aluno1 = new Aluno("João");
$aluno2 = new Aluno("Maria");

// Criando instrutor
$instrutor = new Instrutor("Carlos");

// Criando treinos
$treino1 = new Treino("Musculação");
$treino2 = new Treino("Crossfit");

// Associação bidirecional (Aluno <-> Treino)
$aluno1->inscreverTreino($treino1);
$aluno2->inscreverTreino($treino1);
$aluno1->inscreverTreino($treino2);

// Associação unidirecional (Instrutor -> Treino)
$instrutor->adicionarTreino($treino1);
$instrutor->adicionarTreino($treino2);

// Dependência (Aluno -> Instrutor)
$aluno1->receberOrientacao($instrutor);

// Listagens
echo "<hr>";
$aluno1->listarTreinos();
echo "<br>";
$treino1->listarAlunos();
echo "<br>";
$instrutor->listarTreinos();