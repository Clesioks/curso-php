<?php

class Carro {

    public $nome;
    public $cor;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){

        return "O carro está a $this->velocidadeMaxima km/h";

    }    
}

$ferrari = new Carro;

$ferrari->nome = 'F40';
$ferrari->cor = 'vermelha';

$ferrari->setVelocidadeMaxima(200);


echo $ferrari->getVelocidadeMaxima();