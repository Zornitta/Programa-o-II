<?php

class Usuario{
    private $senha;

    public function __construct($senha){
        $this->senha = $senha;
    }

    public function verificarSenha($senhaDigitada){
        return $this->senha === $senhaDigitada;
    }
}

$usuario = new Usuario("123456");
if ($usuario->verificarSenha("123456")) {
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}