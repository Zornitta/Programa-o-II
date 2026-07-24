<?php

//Criação da classse placa mãe
class PlacaMae{
    private $modelo;

    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function __destruct()
    {
        echo "Placa-Mãe destruida!<br>";
    }
}

//Criação da classe processador
class Processador{
    private $modelo;

    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function __destruct()
    {
        echo "Processador destruido!<br>";
    }
}

//Criação da classe memoria
class MemoriaRAM{
    private $capacidade;

    public function __construct($capacidade)
    {
        $this->capacidade = $capacidade;
    }

    public function getCapacidade(){
        return $this->capacidade;
    }

    public function __destruct()
    {
        echo "Memória destruida!<br>";
    }
}

//Superclasse computador
class Computador{
    private $placaMae;
    private $processador;
    private $memoriaRAM;

    //Construção dos componentes
    public function __construct($modeloPlacaMae, $modeloProcessador, $capacidadeRAM)
    {
        $this->placaMae = new PlacaMae($modeloPlacaMae);
        $this->processador = new Processador($modeloProcessador);
        $this->memoriaRAM = new MemoriaRAM($capacidadeRAM);
    }
    //Exibição dos componentes
    public function exibirComponentes() {
        echo "Placa-mãe: " . $this->placaMae->getModelo() . "<br>";
        echo "Processador: " . $this->processador->getModelo() . "<br>";
        echo "Memória RAM: " . $this->memoriaRAM->getCapacidade() . "<br>";
    }

    public function __destruct()
    {
        echo "Computador destruido.<br>";
    }
}

//Exemplo de componentes
$pc = new Computador("AsRock b450m Steel Legend", "Ryzen 5 5600x", "32gb");
$pc->exibirComponentes();