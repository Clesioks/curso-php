<?php

$carros = ["Palio"=>"90"
, "Santa Fé"=>"1000"
, "Corsa"=>"700"
, "Corcel"=>"1051"
, "Palio"=>"88"
,"Ferrari"=>"15458"];

function carro($arr) {

    $newCarro = [];

    foreach ($arr as $carro => $valor){

        if ($valor > 100) {

            echo $carro . "<br>";
            array_push($newCarro, $carro);
        }
    }
    print_r($newCarro);
}


carro($carros);





?>