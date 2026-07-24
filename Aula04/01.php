<?php
class Conta{
    private $titular;
    private $saldo;
    private $numero;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numero = rand(1, 100);
    }

    public function exibirDados(){
        echo "Titular: {$this->titular}<br>";
        echo "Saldo: {$this->saldo}<br>";
        echo "Número Conta: {$this->numero}<br>";
        echo "<br>";
    }
    
    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
        return true;
        }
        return false;
    }

    public function getSaldo(){
        return $this->saldo;
    }
}

$conta1 = new Conta("Carlos Silva", 500);
$conta2 = new Conta("Ana Oliveira", 1200);
echo $conta1->exibirDados();
$conta1->depositar(300);
echo "Saldo Atualizado!<br>";
echo $conta1->exibirDados();

echo $conta2->exibirDados();
$conta2->depositar(300);
echo "Saldo Atualizado!<br>";
echo $conta2->exibirDados();