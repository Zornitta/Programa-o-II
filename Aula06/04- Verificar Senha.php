<?php

class Usuario{
    public $nome;
    private $senha;

    public function __construct($nome, $senha){
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function verificarSenha($senhaDigitada){
        return $this->senha === $senhaDigitada; 
    }
}

$usuario = new Usuario("Fabiano", "minhasenha");
if ($usuario->verificarSenha("minhasenha")){
    echo "Senha correta!";

}else{
    echo "Senha Incorreta";
}

echo "<br>";

if ($usuario->verificarSenha("senhaerrada")) {
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}
