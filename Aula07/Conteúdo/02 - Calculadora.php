<?php

class Calculadora{
public function somar($a, $b = null, $c = null){
        if($c !== null){
            return $a + $b + $c;
        } 
        elseif($b !== null){
            return $a + $b;
        } 
        elseif(is_array($a)) {
            return array_sum($a);
        } 
        else {
            return "Erro: entrada inválida.";
        }
    }
}

$calc = new Calculadora();
echo "Somar dois números: " . $calc->somar(5, 10) . "<br>";
echo "Somar três números: " . $calc->somar(1, 2, 3) . "<br>";
echo "Somar array: " . $calc->somar([4, 6, 8, 10]) . "<br>";
