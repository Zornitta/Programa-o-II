<?php

class Motor{
    private $potencia;
    private $tipo;

    public function __construct($potencia, $tipo){
        $this->potencia = $potencia;
        $this->tipo = $tipo;
        echo "Motor $tipo de $potencia HP foi criado.<br>";
    }

    public function ligar(){
        echo "Motor ligado! Potência: {$this->potencia} HP.<br>";
    }

    public function desligar(){
        echo "Motor desligado.<br>";
    }

    public function __destruct(){
        echo "Motor {$this->tipo} foi destruído.<br>";
    }
}

class Carro{
    private $motor;

    public function __construct($potencia, $tipo){
        $this->motor = new Motor ($potencia, $tipo);
        echo "Carro criado com motor {$tipo} de {$potencia} HP.<br>";
    }

    public function ligarCarro(){
        $this->motor->ligar();
    }

    public function desligarCarro(){
        $this->motor->desligar();
    }

    public function __destruct(){
        echo "Carro destruído.<br>";
    }
}

$carro = new Carro(250, "V8");
$carro->ligarCarro();
$carro->desligarCarro();