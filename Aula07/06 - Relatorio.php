<?php
class Relatorio {
    public function __call($metodo, $args) {
        if ($metodo === 'gerar') {
            switch (count($args)) {
                case 0:
                    echo "Relatório padrão gerado.<br>";
                    break;
                case 1:
                    echo "Relatório do tipo '{$args[0]}' gerado.<br>";
                    break;
                case 2:
                    echo "Relatório '{$args[0]}' com filtro '{$args[1]}' gerado.<br>";
                    break;
                default:
                    echo "Número de parâmetros não suportado.<br>";
            }
        } else {
            echo "Método '$metodo' não existe.<br>";
        }
    }
}

$r = new Relatorio();

$r->gerar(); // Relatório padrão gerado.
$r->gerar('financeiro'); // Relatório do tipo 'financeiro' gerado.
$r->gerar('vendas', 'região Sul'); // Relatório 'vendas' com filtro 'região Sul' gerado.