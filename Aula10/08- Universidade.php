<?php

abstract class Departamento{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Exatas extends Departamento{
    public function __construct()
    {
        parent::__construct("Exatas");
    }
}

class Humanas extends Departamento{
    public function __construct()
    {
        parent::__construct("Humanas");
    }
}

class Saude extends Departamento{
    public function __construct()
    {
        parent::__construct("Saude");
    }
}

class Universidade{
    private $departamentos = [];

    public function __construct()
    {
        $this->departamentos[] = new Exatas();
        $this->departamentos[] = new Humanas();
        $this->departamentos[] = new Saude();
    }

    public function listarDpt(){
        echo "Departamentos:<br>";
        foreach($this->departamentos as $dpt){
            echo "- " . $dpt->getNome() . "<br>";
        }
    }
}

$campus = new Universidade();
$campus->listarDpt();