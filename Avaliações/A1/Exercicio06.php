<?php
class Config{
    protected $parametros;

    public function __construct($parametros = []){
        $this->parametros = $parametros;
    }
}

class AppConfig extends Config{
    public function getParametro($chave){
        return $this->parametros[$chave] ?? null;
    }

    public function setParametro($chave, $valor){   
        $this->parametros[$chave] = $valor;
    }
}

$appConfig = new AppConfig(['tema' => 'claro']);
echo $appConfig->getParametro('tema');
$appConfig->setParametro('tema', 'escuro');
echo $appConfig->getParametro('tema');