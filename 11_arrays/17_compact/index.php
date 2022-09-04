<?php

// criar um array a partir de variáveis

$time = "Grêmio";
$cor = "Azul";
$ano = 1903;

$clube = compact('time', 'cor', 'ano');

print_r($clube);