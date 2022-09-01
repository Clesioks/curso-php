<?php


$str = "Esta é a minha string";

// STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA
$minha = substr($str, 10, 5);

echo $str . "<br>";
echo $minha . "<br>";


$str2 = "Testando string";

echo "<br>";

$novaString = substr($str2, 10);

echo $novaString;