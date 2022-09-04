<?php

$alimentos = ["batata", "maça", "pera", "feijão", "arroz"];

$novo = array_splice($alimentos, 2, 2);

print_r($novo);

echo "<br>";
print_r($alimentos);