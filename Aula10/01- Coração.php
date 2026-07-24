<?php
class Coracao{
    private $batendo = false;

    public function bater(){
        $this->batendo = true;
        echo "Coração está batendo!<br>";
    }

    public function parar(){
        $this->batendo = false;
        echo "Coração parou de bater!<br>";
    }

    public function estaBatendo(){
        return $this->batendo;
    }
}
class Pessoa{
    private $coracao;

    public function __construct(){
        $this->coracao = new Coracao;
    }

    public function simularBatimento(){
        $this->coracao->bater();
    }

    public function pararCoracao(){
        $this->coracao->para();
    }

    public function statusCoracao(){
        if($this->coracao->estaBatendo()){
            echo "O coração está batendo.<br>";
        }else{
            echo "O coração está parado.<br>";
        }
    }
}

$pessoa = new Pessoa();
$pessoa->simularBatimento();
$pessoa->statusCoracao();
$pessoa->pararCoracao();
$pessoa->statusCoracao();