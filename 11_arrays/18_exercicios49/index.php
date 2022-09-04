<?php

$raça = 'vira-lata';
$pelo = 'longo';
$peso = 20;
$agitado = true;

$animal = compact('raça', 'pelo', 'peso', 'agitado');

foreach ($animal as $bixo){
    echo $bixo . "<br>";
}