<?php

class Pessoa {
    function falar() {
        echo "Olá pessoal!";
    }
}

$rafaela = new Pessoa();


$rafaela->nome = "Rafaela";

echo $rafaela->nome;

echo "<br>";

$rafaela->falar();