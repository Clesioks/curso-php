<?php


class Car {

    public $rodas = 4;
    public $vidro = "Sem película";

}


$carro = new Car;

echo $carro->rodas . "<br>";


class Mecanico {

    function alterarRodas($obj){

        $obj->rodas = 10;

    }

    function addPelicula($pelicula){
        $pelicula->vidro = "G20";
    }

}


$serena = new Mecanico;

$serena->alterarRodas($carro);

echo $carro->rodas . "<br>";

$serena->addPelicula($carro);


echo $carro->vidro . "<br>";