<?php

class ContaBancaria{
    private $saldo;

    public function __construct($saldoinicial = 0){
        $this->saldo = $saldoinicial;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
            return true;
        }else{
            echo "Erro: Valor para depósito deve ser maior que zero!\n";
            return false;
        }
    }

    public function sacar($valor){
        if($valor <= 0){
            echo "Erro: Valor para saque deve ser maior que zero!\n";
            return false;
        }

        if($this->saldo >=$valor){
            $this->saldo -=$valor;
            return true;
        }else{
            echo "Erro: Saldo insuficiente para realizar o saque!\n";
            return false;
        }
    }
    
    public function consultarSaldo(){
        return $this->saldo;
    }
}

//Criando conta
$conta = new ContaBancaria(1000);
echo "Saldo inicial: R$ " . $conta->consultarSaldo() . "<br>";

//Testando depósito
$conta->depositar(500);
echo "Após depositar R$ 500: R$ " . $conta->consultarSaldo() . "<br>";

//Testando saque
$conta->sacar(300);
echo "Após sacar R$ 300: R$" . $conta->consultarSaldo() . "<br>";

//Testando depósito negativo
$conta->depositar(-100);
echo "Saldo atual: R$ " . $conta->consultarSaldo() . "<br>";

//Testando saque maior que saldo
$conta->sacar(3000);
echo "Saldo atual: R$ " . $conta->consultarSaldo() . "<br>";

//Testando saque negativo
$conta->sacar(-300);
echo "Saldo atual: R$ " . $conta->consultarSaldo() . "<br>";
?>