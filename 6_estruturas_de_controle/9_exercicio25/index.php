<?php

$n1 = 100;

$n2 = 20;

$nome = "serena";

$corCabelo = "marrom";


if(is_numeric($n1)){
    $multi = $n1 * 2;

    if($multi > 100) {
        echo "maior que 100";
    } else {
        echo "menor que 100";
    }
}