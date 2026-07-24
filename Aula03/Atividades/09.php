<?php

class Livro{
    public $titulo;
    public $autor;
    public $ano;


    public function __construct($titulo, $autor, $ano){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    public function exibir(){
        echo "Título: {$this->titulo} - Autor: {$this->autor}, Ano: ({$this->ano})<br>";
    }
}

$livros = [
    new Livro("O Código Da Vinci", "Dan Brown", 2003),
    new Livro("A Garota no Trem", "Paula Hawkins", 2015),
    new Livro("A Sutil Arte de Ligar o F*da-se", "Mark Manson", 2016),
    new Livro("Do Mil ao Milhão", "Thiago Nigro", 2018),
    new Livro("1984", "George Orwell", 1949)
];

echo "<h3>Livros publicados após 2015:</h3>";
foreach($livros as $livro){
    if($livro->ano > 2015)
    $livro->exibir();
}