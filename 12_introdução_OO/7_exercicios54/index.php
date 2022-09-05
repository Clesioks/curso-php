<?php

class Pessoa {
    public $nome;
    public $idade;

    function andar($m){
        echo "Estou andando a $m metros";
    }
}

$serena = new Pessoa();

$serena->nome = "Serena";
$serena->idade = 1;
$serena->andar(100);
echo "<br> O nome do bebe é $serena->nome e tem idade $serena->idade e está andando.";