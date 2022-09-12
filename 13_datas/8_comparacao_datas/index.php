<?php


$dataA = new DateTime();
$dataB = new DateTime();

$dataC= new DateTime();

$dataB->setDate(2024,10,02);

if($dataB > $dataA){
    echo "A data B é maior que a data A <br>";
}

if($dataA > $dataB){
    echo "A data A é maior que a data B";
}


if($dataA == $dataC){
    echo "A data iguais";
}