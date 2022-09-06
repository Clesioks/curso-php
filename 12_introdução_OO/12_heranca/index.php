<?php

class Humano {

    public $idade = 11;

    public function falar(){
        echo "Olá mundo!";
    }
    private function gritar(){
        echo "PHP é muito bom!!! <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "lalalala";
    }

    public function acessarFalarBaixinho(){
        $this->falarBaixinho();
    }
}

class Programador extends Humano {

    public function acessarFalarBaixinhoProgramador(){

        $this->falarBaixinho();
        
    }

}


$rafinha = new Humano;

echo "Rafinha tem " . $rafinha->idade . " anos <br>";

$titi = new Programador;

$titi->falar();

echo "<br>TiTi tem " . $titi->idade = 42 . " years old. <br>";

$titi->acessarGritar();

$titi->acessarFalarBaixinho();

$titi->acessarFalarBaixinhoProgramador();