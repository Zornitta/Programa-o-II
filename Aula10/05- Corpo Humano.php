<?php
class Coracao{
    public function bater(){
        echo "Coração está batendo.<br>";
    }
}

class Pulmao{
    public function respirar(){
        echo "Pulmão está respirando.<br>";
    }
}

class Cerebro{
    public function pensar(){
        echo "Cérebro está processadno informação.<br>";
    }
}

class Corpo{
    private $coracao;
    private $pulmao;
    private $cerebro;

    public function __construct()
    {
        $this->coracao = new Coracao();
        $this->pulmao = new Pulmao();
        $this->cerebro = new Cerebro();
    }

    public function viver(){
        echo "Funções vitais.<br>";
        $this->coracao->bater();
        $this->pulmao->respirar();
        $this->cerebro->pensar();
    }
}

$corpo = new Corpo();
$corpo->viver();

