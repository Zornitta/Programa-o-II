<?php

class Calculadora {
    public function somar($a, $b, $c = null) {
        if ($c === null) {
            return $a + $b;
        } else {
            return $a + $b + $c;
        }
    }
}

// Testando
$calc = new Calculadora();

echo $calc->somar(10, 20) . "<br>";
echo $calc->somar(5, 15, 25) . "<br>";