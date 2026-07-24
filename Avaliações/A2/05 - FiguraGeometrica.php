<?php

abstract class Forma{
    abstract public function calcularArea();
}

class Quadrado extends Forma{
    private $lado;

    public function __construct($lado){
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado * $this->lado;
    }
}

class Circulo extends Forma{
    private $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        return round(pi() * pow($this->raio, 2), 2);
    }
}

class Retangulo extends Forma{
    private $altura;
    private $largura;

    public function __construct($altura, $largura){
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function calcularArea(){
        return $this->altura * $this->largura;
    }
}

$figuras = [
    new Quadrado(5),
    new Retangulo(4, 6),
    new Circulo(3)
];

foreach ($figuras as $figura) {
    echo "Área: " . $figura->calcularArea() . "<br>";
}
