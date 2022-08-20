<?php


$arrCarro = [
    'Nome' => 'Santa Fé', 
    'Marca' => 'Hundai', 
    'Cor' => 'Preto'
];

echo $arrCarro['Nome'];
echo "<br>";
echo $arrCarro['Marca'];

$marca = $arrCarro['Marca'];
$nome = $arrCarro['Nome'];
echo "<br>";


echo "O carro tem a marca $marca e o nome $nome";