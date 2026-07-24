<?php

class Aluno{
    private $nome;
    private $nota;

    public function __construct($nome, $notaInicial = 0)
    {
        $this->nome;
        $this->setNota($notaInicial);
    }

    public function setNota($novaNota){
        if ($novaNota >= 0 && $novaNota <= 10){
            $this->nota = $novaNota;
            echo "Nota atualizada para $novaNota.<br>";
        } else{
            echo "Nota inválida. Deve estar entre 0 e 10.<br>";
        }
    }

    public function exibirDados(){
        echo "Aluno: $this->nome | Nota: $this->nota<br>";
    }
}

$aluno1 = new Aluno("Fabiano");
$aluno1->setNota(8.5); //valido
$aluno1->setNota(12); //invalido
$aluno1->exibirDados();
