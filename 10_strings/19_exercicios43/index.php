<?php


$locomocao = "carro - navio - helicóptero - barco - jangada";

$locoArray = explode("-", $locomocao);

print_r($locoArray);

echo "<br>";

for ($i = 0; $i < count($locoArray); $i++){
    echo $i . " " . $locoArray[$i] . "<br>";
}