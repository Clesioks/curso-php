<?php


class Carro {

    public $nome;
    public $cor;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel){
        $this->velocidade_maxima = $vel;
        }

        function getVelocidadeMaxima(){
            return "está na velocidade " . $this->velocidade_maxima;
        } 
}

$ferrari = new Carro();

$ferrari->cor = "vermelha";
$ferrari->nome = "F40";

echo $ferrari->setVelocidadeMaxima("200km/h");

echo "<br>";

echo "A ferrari é uma $ferrari->nome tem a cor $ferrari->cor " . " e " . $ferrari->getVelocidadeMaxima();