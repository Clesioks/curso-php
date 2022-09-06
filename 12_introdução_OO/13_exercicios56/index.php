<?php

class Humano {

    public $olhos = "azuis";
    public $cabelo = "castanho";

    protected function falar(){
        echo "Olá, estou falando <br>";
    }

}

class Professor extends Humano {

    public $aula = "ingles";
    public $turno = "manhã";

    public function falando(){
        $this->falar();
    }

    public function estaLecionando(){
        echo "<br> está lecionando a disciplina $this->aula";
        }

}

$serena = new Humano;

echo $serena->olhos . "<br>";
echo "<br>";

echo $serena->cabelo . "<br>";

echo "<br>";


$titi = new Professor;

$titi->falando();
echo "<br>";

echo $titi->aula;

$titi->estaLecionando();