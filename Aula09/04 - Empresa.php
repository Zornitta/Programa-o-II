<?php

class Funcionario{
    private $nome;
    private $salario;

    public function __construct($nome, $salario = 0)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getSalario(){
        return $this->salario;
    }
}

class Empresa{
    private $funcionarios = [];

    public function addFuncionario(Funcionario $f){
        $this->funcionarios[] = $f;
        echo "Funcionário: '{$f->getNome()}' adicionado a Empresa.<br>";
    }

    public function exibirFolha(){
        echo "Folha de pagamento:<br>";
        foreach($this->funcionarios as $funcionario){
            echo "- " . $funcionario->getNome() . ": R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . ".<br>";
        }
    }
}

$empresa = new Empresa();

$f1 = new Funcionario("Ana", 3200);
$f2 = new Funcionario("João", 2850);
$f3 = new Funcionario("Carla", 4000);

$empresa->addFuncionario($f1);
$empresa->addFuncionario($f2);
$empresa->addFuncionario($f3);

$empresa->exibirFolha();