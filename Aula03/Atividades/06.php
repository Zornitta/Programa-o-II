<?php
class Retangulo{
    private $altura;
    private $largura;

    public function __construct($altura = 0, $largura = 0) {
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function calcularArea() {
        return $this->altura * $this->largura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->altura + $this->largura);
    }

    public function exibirDetalhes(){
        echo "Altura: {$this->altura} <br>";
        echo "Largura: {$this->largura} <br>";
        echo "Área: " . $this->calcularArea() . "<br>";
        echo "Perímetro: " . $this->calcularPerimetro() . "<br>";
        echo "<br>";
    }
}

$listaRetangulos = [
    new Retangulo(10, 5),
    new Retangulo(7, 3),
    new Retangulo(12, 8),
    new Retangulo(6, 4)
];

foreach ($listaRetangulos as $retangulo){
    $retangulo->exibirDetalhes();
}
?>