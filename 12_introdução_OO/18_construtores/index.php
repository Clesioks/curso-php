<?php

class Car{

    public $modelo;
    public $cor;
    public $rodas;

    function __construct($modelo, $cor, $rodas){

        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->rodas = $rodas;

    }
}

$ferrari = new Car("F40", "vermelha", "aro 20");

echo "O carro Ferrari do modelo $ferrari->modelo";
echo "<br>";

$bmw = new Car("C200", "preto", "aro 18");


echo "O carro BMW do modelo $bmw->modelo";