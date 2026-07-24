<?php

    Class Pessoa{
        public string $nome;
        public int $idade;
    }

    function Apresentar($nome, $idade){
        echo "Meu nome é $nome, tenho $idade anos.";
    }
?>