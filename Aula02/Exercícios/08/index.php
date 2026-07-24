<?php
require_once 'Produto.php';

$P1 = new Produto("Arroz", 10.00, 5);
$P2 = new Produto("Feijão", 8.00, 3);
$P3 = new Produto("Macarrão", 5.00, 10);

$P1->exibirDetalhes();
$P2->exibirDetalhes();
$P3->exibirDetalhes();

?>