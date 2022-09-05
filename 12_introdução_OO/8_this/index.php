<?php


class Animal {
    function escolherNome($nome){
        $this->nome = $nome;
    }

    function latir(){
        return "au au";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }



}


$frida = new Animal();

$frida->escolherNome("Frida");

echo "O nome do cachorro é $frida->nome ";

echo "<br>";

echo $frida->latir();

echo "<br>";

echo $frida->latirForte();