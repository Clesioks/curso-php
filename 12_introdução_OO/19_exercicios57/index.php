<?php

class Cachorro {

    public $raca;
    public $pelo;
    public $peso;

    function __construct($raca, $pelo, $peso){

        $this->raca = $raca;
        $this->pelo = $pelo;
        $this->peso = $peso;
        
    }
}

$zara = new Cachorro("vira-lata", "longo", 5);

echo "O cachorro se chama Zara e é $zara->raca e tem o pêlo
$zara->pelo e pesa $zara->peso kg.";