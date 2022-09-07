<?php


trait Teste {

    public $x = 10;


}


class Testando {
    use Teste;    
}

$testandoTrait = new Testando;

echo $testandoTrait->x;