<?php

class Livro{
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $numeroPaginas;
    private bool $disponivel;

    public function setTitulo($titulo){
        if (empty(trim($titulo))) {
            throw new Exception("O título não pode ser vazio.");
        }
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAutor($autor){
        if (empty(trim($autor))) {
            throw new Exception("O autor não pode ser vazio.");
        }
        $this->autor = $autor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAnoPublicacao($ano){
        $anoAtual = date("Y");
        if ($ano > $anoAtual){
            throw new Exception("Ano de publicação não pode ser maior que o ano atual ($anoAtual).");
        }
        $this->anoPublicacao = $ano;
    }

    public function getAnoPublicacao(){
        return $this->anoPublicacao;
    }

    public function setNumeroPaginas($numeroPaginas){
        if($numeroPaginas > 0){
            $this->numeroPaginas = $numeroPaginas;
        }else{
            throw new Exception("O número de páginas precisa ser maior que 0");
        }
    }

    public function getNumeroPaginas(){
        return $this->numeroPaginas;
    }

    public function setDisponivel($disponivel){
        $this->disponivel = $disponivel;
    }

    public function isDisponivel(){
        return $this->disponivel;
    }
}

// Exemplo de uso:
$livro = new Livro();
$livro->setTitulo("Dom Casmurro");
$livro->setAutor("Machado de Assis");
$livro->setAnoPublicacao(1899);
$livro->setNumeroPaginas(256);
$livro->setDisponivel(true);
echo $livro->getTitulo();
// Teste de validação
try {
    $livro->setAnoPublicacao(2030);
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}