<?php   

class Funcionario{
    private $nome;
    private $salario;
    private $porcentagem = 10;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function ajusteSalario(){
        $this->salario += $this->salario * $this->porcentagem / 100;
        return $this->salario;
    }
}
$funcionario1 = new Funcionario("João", 2000);
echo $funcionario1->ajusteSalario() . "<br>";

$funcionario2 = new Funcionario("Maria", 3000);
echo $funcionario2->ajusteSalario() . "<br>";

$funcionario3 = new Funcionario("Pedro", 4000);
echo $funcionario3->ajusteSalario() . "<br>";
