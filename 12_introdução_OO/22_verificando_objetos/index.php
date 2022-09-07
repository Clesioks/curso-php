<?php

class Humano {

    public function falar(){
        echo "Olá";
    }
}

$serena = new Humano;

if(is_object($serena)){
    echo "é OBJ";
} else {
    echo "não é OBJ";
}

echo "<br>";


echo get_class($serena) ."<br>";