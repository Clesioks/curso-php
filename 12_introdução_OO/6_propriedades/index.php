<?php


class Car {
    public $rodas = 4;
    public $aro = 20;

    public $cor = 'Vermelha';

    function ligar(){
        echo "Vrummmm Vrummmm";
    }
}


$ferrari = new Car();

$ferrari->rodas . "<br>";

$ferrari->aro = 18;



echo "A cor da ferrari é $ferrari->cor";

echo "<br>";

echo " A Ferrari está sendo ligada..." . $ferrari->ligar();