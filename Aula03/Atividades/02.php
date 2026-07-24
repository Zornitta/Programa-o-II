<?php
class Aluno{
    public string $nome;
    public int $media;

    public function __construct($nome, $media) {
        $this->nome = $nome;
        $this->media = $media;
    }

    public function verificarAprovacao() {
        if ($this->media >= 7) {
            echo "{$this->nome} está aprovado com média {$this->media}.<br>";
        } else {
            echo "{$this->nome} está reprovado com média {$this->media}.<br>";
        }
    }
}

$aluno1 = new Aluno("Ana", 8,5);
$aluno2 = new Aluno("Pedro", 6.0);

echo "Verificando aprovação dos alunos:<br>";

echo $aluno1->nome . ": ";
$aluno1->verificarAprovacao();
echo $aluno2->nome . ": ";

$aluno2->verificarAprovacao();
?>