<?php

class Calculadora{
    public function somar($a, $b){
        return $a + $b;
    }

    public function subtrair($a, $b){
        return $a - $b;
    }

    public function multiplicar($a, $b){
        return $a * $b;
    }

    public function dividir($a, $b){
        if($b != 0){
            return $a / $b;
        }
        return "Divisão por zero não é permitida.";
    }
}

$calcular = new Calculadora();

echo "Soma: " . $calcular->somar(5, 6)."<br>";
echo "Subtração: " . $calcular->subtrair(7, 5)."<br>";
echo "Multiplicação: " . $calcular->multiplicar(10, 2)."<br>";
echo "Divisão: " . $calcular->dividir(50, 4)."<br>";
echo "Divisão por zero: " . $calcular->dividir(5, 0)."<br>";
