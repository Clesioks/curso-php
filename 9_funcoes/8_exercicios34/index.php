<?php

function parImpar($num){

    if($num % 2 == 0){
        echo "Número $num é par.";
    } else {
        echo "Número $num é ímpar.";
    }
}


parImpar(11);
echo "<br>";
parImpar(5448);
echo "<br>";
parImpar(7777);