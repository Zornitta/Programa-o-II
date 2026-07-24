<?php

class ConexaoBD {
    private $conexao = null;

    private function conectar() {
        $this->conexao = new PDO('sqlite::memory:');
    }

    public function getConexao() {
        if ($this->conexao === null) {
            $this->conectar();
        }
        return $this->conexao;
    }
}

$conexaoBD = new ConexaoBD();
$conexao = $conexaoBD->getConexao();
if ($conexao) {
    echo "Conexão realizada com sucesso!";
}