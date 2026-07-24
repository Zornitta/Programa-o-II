<?php
class ConversorTemperatura{

    public static function cParaF($celsius){
        return ($celsius * 9/5) + 32;
    }

    public static function fParaC($fahrenheit){
        return ($fahrenheit - 32) * 5/9;
    }
}

$celsius = 30;
$fahrenheit = 86;

echo "{$celsius}°C = " . ConversorTemperatura::cParaF($celsius) . "°F<br>";
echo "{$fahrenheit}°C = " . ConversorTemperatura::fParaC($fahrenheit) . "°C<br>";