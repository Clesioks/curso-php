<?php

$x = 0;

while(10 > $x){

    echo $x . "<br>";
    $x = $x + 1;

    if($x === 5 ){
        echo "Terminou em 5...";
        break;
    }

}