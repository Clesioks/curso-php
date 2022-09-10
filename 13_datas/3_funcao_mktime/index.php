<?php


$dataAniver = mktime(4,40,33,7,2,1980);

echo $dataAniver . "<br>";

$dataAniverformatada = date('d / m / Y', $dataAniver);

echo $dataAniverformatada;