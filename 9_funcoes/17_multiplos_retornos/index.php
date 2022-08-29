<?php

function alterarDados($nome, $idade){

    $nome = "Sr. " . $nome;
    $idade = "você tem $idade anos.";

    return [$nome, $idade];

}

$todos = alterarDados("TiTi", 42);

echo "Olá " . $todos[0] . " você tem " . $todos[1];