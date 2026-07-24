<?php

class Session{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo "Sessão '{$this->name}' criada.<br>";
    }

    public function __destruct()
    {
        echo "Sessão '{$this->name}' destruída.<br>";
    }

    public function getName(){
        return $this->name;
    }
}

class BibliotecaDigital{
    private $sessions = [];

    public function __construct()
    {
        $this->sessions[] = new Session("Literatura");
        $this->sessions[] = new Session("Ciência");
        $this->sessions[] = new Session("História");
        echo "Biblioteca criada com sessões.<br>";
    }

    public function listSessions(){
        echo"Sessões:<br>";
        foreach($this->sessions as $s){
            echo "- " . $s->getName() . "<br>";
        }
    }

    public function __destruct()
    {
        echo "Biblioteca Digital destruída junto com as sessões...<br>";
    }
}

echo "Inicializando biblioteca...<br>";
$biblioteca = new BibliotecaDigital();
$biblioteca->listSessions();

unset($biblioteca);
