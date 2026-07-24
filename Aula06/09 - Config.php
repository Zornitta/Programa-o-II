<?php

class Config{
    protected $parametros = [];

    public function __construct()
    {
        echo "Configuração iniciada.<br>";
    }
}

class ConfigApp extends Config{

    public function setParametro($chave, $valor){
        $this->parametros[$chave] = $valor;
        echo "Parâmetro '$chave' definido como '$valor'.<br>";
    }
    public function mostrarParametros(){
        if(empty($this->parametros)){
            echo "Nenhum parâmetro configurado.<br>";
        } else{
            echo "Parâmetros de configuração:<br>";
            foreach ($this->parametros as $chave => $valor) {
                echo "- $chave: $valor<br>";
            }
        }
    }
}

$configuracao = new ConfigApp();
$configuracao->setParametro("modo", "produção");
$configuracao->setParametro("versao", "1.2.5");
$configuracao->mostrarParametros();
