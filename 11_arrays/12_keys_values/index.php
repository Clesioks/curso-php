<?php

$carro = [
    'marca' => "BMW",
    'motor' => '2.4',
    'teto_solar' => true    
];


$chaves = array_keys($carro);

print_r($chaves) . "<br>";


$valores = array_values($carro);

echo "<br>";

print_r($valores);