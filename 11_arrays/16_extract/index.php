<?php


// cria variáveis de uma chave

$arr = [
    "time" => 'Grêmio',
    'cor' => 'azul',
    "mascote" => "mosqueteiro"
];

extract($arr);

echo $time;