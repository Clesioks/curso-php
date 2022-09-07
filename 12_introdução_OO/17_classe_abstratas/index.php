<?php

abstract class Teste {
    public static function testandoClasse(){
        echo "Esse método é uma classe abstrata <br>";
    }

    abstract public function testeAbs();
}


Teste::testandoClasse();

class Nova extends Teste {

    public function testeAbs(){
        echo "Teste metódo abstrato";
    }

}