<?php

class Musica{
    private $titulo;
    private $duracao;

    public function __construct($titulo, $duracao = 0)
    {
        $this->titulo = $titulo;
        $this->duracao = $duracao;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getDuracao(){
        return $this->duracao;
    }
}

class Playlist{
    private $musicas = [];

    public function addMusica(Musica $musica) {
        $this->musicas[] = $musica;
        echo "Música '{$musica->getTitulo()}' adicionada a Playlist.<br>";
    }

    public function calcDuracaoTotal(){
        $total = 0;

        foreach($this->musicas as $musica){
            $total += $musica->getDuracao();
        }
        echo "Duração total da playlist: " . number_format($total, 2, ',', '.') . " minutos<br>";
    }

    public function exibirMusicas(){
        echo "Músicas: <br>";
        foreach($this->musicas as $index => $musica){
            echo ($index + 1) . " - {$musica->getTitulo()} - " . number_format($musica->getDuracao(), 2, ',' , '.') . ".<br>";
        }
    }
}

$playlist = new Playlist();

$m1 = new Musica("Surface | Aero Chord", 3.50);
$m2 = new Musica("Smels Like Them Spirit | Nirvana", 4.40);
$m3 = new Musica("Californication | Red Hot Chilli Pepers", 5.10);

$playlist->addMusica($m1);
$playlist->addMusica($m2);
$playlist->addMusica($m3);

$playlist->exibirMusicas();
$playlist->calcDuracaoTotal();