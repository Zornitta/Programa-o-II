<?php

class Funcionario{
    public $nome;
    protected $salario;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }
}

class Gerente extends Funcionario{

    public function __construct($nome, $salario){
        parent::__construct($nome, $salario);
    }


    public function alterarSalario(Funcionario $funcionario, $novoSalario){
        $funcionario->salario = $novoSalario;
    }
}

$funcionario1 = new Funcionario("Pedro", 3000);
$gerente1 = new Gerente("Ana", 8000);

echo "Salário antes: " . $funcionario1->getSalario() . "<br>";

$gerente1->alterarSalario($funcionario1, 4000);

echo "Salário depois: " . $funcionario1->getSalario() . "<br>";


