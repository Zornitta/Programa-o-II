<?php

class Carro{
    private $velocidade;

    public function __construct()
    {
        $this->velocidade = 0;
        echo "Carro com velocidade de {$this->velocidade} km/h.<br>";
    }

    public function acelerar($incremento)
    {
        if($incremento < 0)
        {
            echo "Valor inválido.<br>";
            return;
        }

        $novaVelocidade = $this->velocidade + $incremento;
        if ($novaVelocidade > 200){
            $this->velocidade = 200;
            echo "Velocidade máxima atingida: 200 km/h.<br>";
        } else{
            $this->velocidade = $novaVelocidade;
            echo "Acelerou para {$this->velocidade} km/h.<br>";
        }
    }

    public function frear($decremento)
    {
        if($decremento < 0){
            echo "Valor inválido para frear.<br>";
            return;
        }

        $novaVelocidade = $this->velocidade - $decremento;
        if($novaVelocidade < 0){
            $this->velocidade = 0;
            echo "Carro parado: 0 km/h.<br>";
        } else{
            $this->velocidade = $novaVelocidade;
            echo "Freou para {$this->velocidade} km/h.<br>";
        }
    }

    public function getVelocidade(){
        return $this->velocidade;
    }
}

//teste
$meuCarro = new Carro();
$meuCarro->acelerar(50);
$meuCarro->acelerar(160);
$meuCarro->frear(30);
$meuCarro->frear(200);

