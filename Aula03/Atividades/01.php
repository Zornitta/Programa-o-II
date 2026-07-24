<?php
class Carro{
    public $marca;
    public $modelo;
    public $ano;

    function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    function exibirInformacoes() {
        echo "Marca: {$this->marca}<br> Modelo: {$this->modelo}<br> Ano: {$this->ano}.<br>";
    }
}

$meuCarro = new Carro("Toyota", "Corolla", 2020);
$meuCarro->exibirInformacoes();
?>