<?php


class Pessoa {
    function falar() {
        echo "Olá eu sou uma pessoa! <br>";
    }

    function somar($x, $y){
        echo $y + $x . "<br>";
    }
}

$karine = new Pessoa();
$karine->falar();
$karine->somar(10,15);

$serena = new Pessoa();
$serena->falar();
$serena->somar(5454,5645);