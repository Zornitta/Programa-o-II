<?php

abstract class Animal{
    abstract public function falar();
}

class Cachorro extends Animal{
    public function falar(){
        return "Cachorro: Au au!";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Gato: Miau!";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Passaro: Piu Piu!";
    }
}

$animais = [
    new Cachorro(),
    new Gato(),
    new Passaro()
];

foreach ($animais as $animal) {
    echo $animal->falar() . "<br>";
}

