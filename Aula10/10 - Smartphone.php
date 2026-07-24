<?php

class Tela{

    public function __construct()
    {
        echo "Tela criada.<br>";
    }
}

class Bateria{

    public function __construct()
    {
        echo "Bateria criada.<br>";
    }
}

class Camera{

    public function __construct()
    {
        echo "Camera criada.<br>";
    }
}

class Processador{

    public function __construct()
    {
        echo "Processador criado.<br>";
    }
}

class Smartphone{
    private $tela;
    private $bateria;
    private $camera;
    private $processador;

    public function __construct()
    {
        $this->tela = new Tela();
        $this->bateria = new Bateria();
        $this->camera = new Camera();
        $this->processador = new Processador();
        echo "Smartphone criado!<br>";
    }

    public function __destruct()
    {
        echo "Smartphone destruido!<br>";
    }
}

$smartphone = new Smartphone();