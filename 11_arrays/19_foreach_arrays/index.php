<?php

$serena = [
    "cabelo" => "castanho",
    "olhos" => "azuis",
    "altura" => 1.10
];

$rafaela = [
    "cabelo" => "loira",
    "olhos" => "azuis",
    "altura" => 1.65
];

foreach ($serena as $carac => $values){
    echo $carac . ":" . $values . "<br>";
}