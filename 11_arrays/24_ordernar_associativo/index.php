<?php

// ordernar pelas chaves asort

// ordernas pelo valor ksort

$arr= [
    "TiTi" => 42,
    "Karine" => 35,
    "Rafaela" => 11,
    "Serena" => 1
];

asort($arr);

print_r($arr);

echo "<br>";


ksort($arr);

print_r($arr);