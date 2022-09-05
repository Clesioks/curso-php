<?php

class Humano {

    public const OLHOS = 2;
    public const DEDOS = 10;
    public const BRACO = 2;

    function mostrarConstante(){
        echo self::DEDOS . "<br>";
    }

}


$serena = new Humano;

echo "Serena tem " . $serena::OLHOS . " olhos e" . $serena->mostrarConstante();