<?php

class Humano {

}

class Animal {

}


$rafinha = new Humano;

$zara = new Animal;

if($zara instanceof Animal){
    echo "Zara é um animal";
} else {
    echo "Não é animal";
}