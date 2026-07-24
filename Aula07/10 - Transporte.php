<?php

abstract class Transporte{
    protected $distancia;

    public function __construct($distancia){
        $this->distancia = $distancia;
    }

    abstract public function calcularTarifa();
}

class Onibus extends Transporte{
    public function calcularTarifa(){
        return 4.50;
    }
}

class Metro extends Transporte{
    public function calcularTarifa(){
        return 5.00;
    }
}

class Taxi extends Transporte{
    public function calcularTarifa(){
        $tarifaBase = 3.00;
        $valorPorKm = 2.00;
        return $tarifaBase + ($this->distancia * $valorPorKm);
    }
}

$transportes = [
    new Onibus(10),
    new Metro(10),
    new Taxi(10)
];

foreach ($transportes as $t){
    echo get_class($t) . " = Tarifa: R$ " . $t->calcularTarifa() . "<br>";
}