<?php

class Pedido{
    private $itens = [];

    public function adicionarItem($item){
        if(!empty($item)){
            $this->itens[] = $item;
            echo "Item adicionado ao pedido.<br>";
        }else{
            echo "Item inválido.<br>";
        }
    }

    public function listarItens(){
        if(empty($this->itens)){
            echo "O pedido está vazio.<br>";
        } else{
            echo "Itens do pedido:<br>";
            foreach($this->itens as $index => $item){
                echo ($index + 1) . ". $item<br>";
            }
        }
    }
}

$meuPedido = new Pedido();
$meuPedido->adicionarItem("Pizza");
$meuPedido->adicionarItem("Refrigerante");
$meuPedido-> listarItens();