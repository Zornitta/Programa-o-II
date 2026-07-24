<?php

//Classe Funcionario
class Funcionario{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

//Classe empresa
class Empresa{
    private $funcionarios = [];

    //Adiciona funcionarios ao array
    public function addFuncionario(Funcionario $funcionario){
        $this->funcionarios[] = $funcionario;
    }

    //Exibe a lista de funcionários
    public function exibirFuncionarios(){
        foreach($this->funcionarios as $funcionario){
            echo $funcionario->getNome() . ".<br>";
        }
    }
}

//Testes
$empresa = new Empresa();

$f1 = new Funcionario("João");
$f2 = new Funcionario("Maria");
$f3 = new Funcionario("Marcos");

$empresa->addFuncionario($f1);
$empresa->addFuncionario($f2);
$empresa->addFuncionario($f3);

$empresa->exibirFuncionarios();