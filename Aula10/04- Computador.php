<?php

class PlacaMae{
    private $modelo;

    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }
}

class Processador{
    private $modelo;

    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }
}

class MemoriaRAM{
    private $capacidade;

    public function __construct($capacidade)
    {
        $this->capacidade = $capacidade;
    }

    public function getCapacidade(){
        return $this->capacidade;
    }
}

class Computador{
    private $placaMae;
    private $processador;
    private $memoriaRAM;

    public function __construct($modeloPlacaMae, $modeloProcessador, $capacidadeRAM)
    {
        $this->placaMae = new PlacaMae($modeloPlacaMae);
        $this->processador = new Processador($modeloProcessador);
        $this->memoriaRAM = new MemoriaRAM($capacidadeRAM);
    }

    public function exibirComponentes() {
        echo "Placa-mãe: " . $this->placaMae->getModelo() . "<br>";
        echo "Processador: " . $this->processador->getModelo() . "<br>";
        echo "Memória RAM: " . $this->memoriaRAM->getCapacidade() . "<br>";
    }
}

$pc = new Computador("AsRock b450m Steel Legend", "Ryzen 5 5600x", "32gb");
$pc->exibirComponentes();