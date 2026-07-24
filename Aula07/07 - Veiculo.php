<?php

class Veiculo{
    public function mover(){
        echo "O veículo está se movendo.<br>";
    }
}

class Carro extends Veiculo{
    public function mover(){
        return "O carro está acelerando.<br>";
    }
}

class Bicicleta extends Veiculo{
    public function mover(){
        return "A bicicleta está pedalando na ciclovia.<br>";
    }
}

class Aviao extends Veiculo{
    public function mover(){
        return "O avião está voando pelos céus.<br>";
    }
}

$veiculos = [
    new Carro(),
    new Bicicleta(),
    new Aviao()
];

foreach ($veiculos as $v){
    echo $v->mover();
}