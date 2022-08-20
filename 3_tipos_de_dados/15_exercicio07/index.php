<?php


$arrPessoa = [
    'nome' => 'Rafaela',
    'idade' => 11,
    'altura' => 1,60,
    'cabeluda' => true
];

echo "<br>";

$idade = $arrPessoa['idade'];

if ($idade > 18) {
    echo "É maior de idade";
} else {
    echo "Menor de idade";
}