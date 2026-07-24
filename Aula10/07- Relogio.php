<?php

abstract class Ponteiro{
    protected $valor;
    protected $limite;

    public function __construct($limite)
    {
        $this->valor = 0;
        $this->limite = $limite;
    }

    public function avancar(){
        $this->valor = ($this->valor + 1) % $this->limite;
    }

    public function getValor(){
        return str_pad($this->valor, 2, "0", STR_PAD_LEFT);
    }
}

class PonteiroHora extends Ponteiro{
    public function __construct()
    {
        parent::__construct(24);
    }
}
class PonteiroMinuto extends Ponteiro{
    public function __construct()
    {
        parent::__construct(60);
    }
}
class PonteiroSegunto extends Ponteiro{
    public function __construct()
    {
        parent::__construct(60);
    }
}

class Relogio{
    private $hora;
    private $minuto;
    private $segundo;

    public function __construct()
    {
        $this->hora = new PonteiroHora();
        $this->minuto = new PonteiroMinuto();
        $this->segundo = new PonteiroSegunto();
    }

    public function avancarTempo()
    {
        $this->segundo->avancar();
        if($this->segundo->getValor() == "00"){
            $this->minuto->avancar();
            if($this->minuto->getValor() == "00"){
                $this->hora->avancar();
            }
        }
    }

    public function mostrarHora(){
        echo "🕒 " . $this->hora->getValor() . ":" . $this->minuto->getValor() . ":" . $this->segundo->getValor() . "<br>";
    }
}

$relogio = new Relogio();
for ($i = 0; $i < 3665; $i++) { // Simula 1 hora, 1 minuto e 5 segundos
    $relogio->avancarTempo();
}
$relogio->mostrarHora();

?>
