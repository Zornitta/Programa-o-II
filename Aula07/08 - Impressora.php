<?php

class Impressora{
    public function imprimir(){
        echo "Impressora está sendo usada.<br>";
    }
}

class PDF extends Impressora{
    public function imprimir(){
        return "Imprimindo PDF.<br>";
    }
}

class Texto extends Impressora{
    public function imprimir(){
        return "Imprimindo Texto.<br>";
    }
}

class Imagem extends Impressora{
    public function imprimir(){
        return "Imprimindo Imagem.<br>";
    }
}

$formatos = [
    new PDF(),
    new Texto(),
    new Imagem()
];

foreach ($formatos as $f){
    echo $f->imprimir();
}