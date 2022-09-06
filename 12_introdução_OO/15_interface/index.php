<?php

interface Caracteristicas {

    const nome = "Rafaela";

    public function falar();

}


class Humano implements Caracteristicas {

    public $idade = 29;

    public function falar(){
        echo "Olá mundo!";
    }

    public function dizerNome(){
        echo "Olá meu nome é " . self::nome . "<br>";
    }

}

$rafinha = new Humano;

$rafinha->falar();

echo "<br>";

$rafinha->dizerNome();