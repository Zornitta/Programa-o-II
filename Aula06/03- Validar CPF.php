<?php

class Cliente{
    private $nome;
    private $cpf;

    public function __construct($nome, $cpf){
        $this->setNome($nome);
        if($cpf){
            $this->setCpf($cpf);
        }
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setCpf($cpf){
        $cpfNumeros = preg_replace('/\D/', '', $cpf);
        if(count(str_split($cpfNumeros)) == 11){
            $this->cpf = $cpfNumeros;
        }else{
            throw new Exception("CPF deve conter 11 números!");
        }
    }

    public function getCpf(){
        return $this->cpf;
    }
}

try {
    $cliente = new Cliente("Maria", "123.456.789-00");
    echo "Nome: " . $cliente->getNome() . "<br>";
    echo "CPF: " . $cliente->getCpf() . "<br>";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

?>