<?php

class Pedido{
    private $itens = [];

    public function addItem($item){
        $this->itens[] = $item;
    }

    public function listarItens(){
        foreach($this->itens as $item){
            echo $item . "<br>";
        }
    }
}

$pedido = new Pedido();
$pedido->addItem("Arroz");
$pedido->addItem("Feijão");
$pedido->addItem("Carne");

$pedido->listarItens();