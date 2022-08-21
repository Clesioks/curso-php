<?php


$teste = 10;

echo "Escopo global $teste <br>";

if (5 > 2 ){
    $teste = 5;

    echo "Escopo if $teste <br>";

}

echo "Escopo global 2 $teste <br>";

function alterandoGlobal(){

    global $teste;

    $teste = 'Serena';

    echo "$teste alterado <br>";

}

alterandoGlobal();

echo $teste;