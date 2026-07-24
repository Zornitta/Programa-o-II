<?php

abstract class Pagamento{
    abstract public function processar();
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }
}

class Cartao extends Pagamento{
    public function processar(){
    return "Processando pagamento de R$ {$this->valor} via Cartão de Crédito...";
    }
}

class Pix extends Pagamento{
    public function processar(){
    return "Processando pagamento de R$ {$this->valor} via Cartão Pix...";
    }
}

class Boleto extends Pagamento{
    public function processar(){
    return "Processando pagamento de R$ {$this->valor} via Boleto, vencimento em 3 dias...";
    }
}

$pagamentos = [
    new Cartao(150.00),
    new Pix(89.90),
    new Boleto(230.75)
];

foreach ($pagamentos as $p) {
    echo $p->processar() . "<br>";
}
