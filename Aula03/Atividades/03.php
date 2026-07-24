<?php

class ContaBancaria{
    public $titular;
    public $saldo;

    public function __construct($titular, $saldoInicial = 0){
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    function sacar($valor){
        if($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    function getSaldo(){
        return $this->saldo;
    }
}

$conta1 = new ContaBancaria("João", 1000);
$conta1->depositar(200);
$conta1->sacar(150);

$conta2 = new ContaBancaria("Maria", 500);
$conta2->depositar(300);
$conta2->sacar(100);

echo "Saldo de {$conta1->titular}: R$ {$conta1->getSaldo()}<br>";
echo "Saldo de {$conta2->titular}: R$ {$conta2->getSaldo()}";
?>
