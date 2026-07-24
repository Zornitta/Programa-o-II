<?php

class Funcionario{
    protected $nome;
    protected $salario;

    public function __construct($nome, $salario = 0){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }
    public function getNome(){
        return $this->nome;
    }
    
}

class Gerente extends Funcionario{
    private $bonus;

    public function aplicarBonus($valorBonus){
        $this->bonus = $valorBonus;
        $this->salario += $valorBonus;
    }

    public function getBonus(){
        return $this->bonus;
    }
}

$gerente = new Gerente("Carlos Silva", 5000);
echo "Nome do gerente: " . $gerente->getNome() . "<br>";
echo "Salário antes do bônus: R$ " . $gerente->getSalario() . "<br>";

$gerente->aplicarBonus(1500);
echo "Salário após bônus: R$ " . $gerente->getSalario() . "<br>";

