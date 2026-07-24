<?php

//Base dos módulos
abstract class Modulo{
    protected $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

//Módulos específicos
class Login extends Modulo{
    public function __construct(){
        parent::__construct("Login");
    }   
}

class Dashboard extends Modulo{
    public function __construct(){
        parent::__construct("Dashboard");
    }   
}

class Config extends Modulo{
    public function __construct(){
        parent::__construct("Config");
    }   
}

//Classe principal
class Aplicativo{
    private $modulos = [];

    public function __construct()
    {
        //Inicializa os módulos automaitcamente
        $this->modulos[] = new Login();
        $this->modulos[] = new Dashboard();
        $this->modulos[] = new Config();
    }
    public function listarModulosAtivos(){
        echo "Modulos ativos:<br>";
        foreach($this->modulos as $modulo){
            echo "- " . $modulo->getNome() . "<br>";
        }
    }
}

//Exemplo de uso
$app = new Aplicativo();
$app->listarModulosAtivos();