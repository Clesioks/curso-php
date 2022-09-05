<?php

class Cachorro {

    function latir(){
        echo "Au, Au, Au";
    }

    function andar($m){
        echo "Andei por $m metros";
    }
}

$tonico = new Cachorro();

$tonico->latir();
echo "<br>";
$tonico->andar(121);