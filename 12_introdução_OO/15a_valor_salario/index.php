<?php

class Notebook {

    public $processador = "i5";
    public $memoria = "16gb";
    public $disco = "250gb";

    function sistema($ver){
        return "Com sistema windows $ver";
    }
}

$acer = new Notebook;

echo $acer->sistema(10) . " " . $acer->processador;