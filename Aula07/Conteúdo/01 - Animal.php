<?php

abstract class Animal{
    abstract public function falar();
    abstract public function mover();

}

class Cachorro extends Animal{
    public function falar(){
        return "Cachorro: Au au!";
    }

    public function mover(){
        return "Cachorro: Correr";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Gato: Miau!";
    }

    public function mover(){
        return "Gato: Caminhando";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Passaro: Piu Piu!";
    }

    public function mover(){
        return "Passaro: Voando";
    }
}

$animais = [
    new Cachorro(),
    new Gato(),
    new Passaro()
];

foreach ($animais as $animal) {
    echo $animal->falar() . "<br>";
    echo $animal->mover() . "<br>";
    echo "<br>";
}

