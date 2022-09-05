<?php


class Carro {

    public $nome;
    public $cor;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel) {
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima é " . $this->velocidadeMaxima;
    }
}

$ferrari = new Carro;

$ferrari->setVelocidadeMaxima(200);

$ferrari->getVelocidadeMaxima();