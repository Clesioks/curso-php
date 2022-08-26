<?php

$j = 0;

$nome = "Tonico";

do {
    echo $j . "Testando do while" . "<br>" ;
    if($j == 2){
        echo $nome;
    }
    $j++;

} while( $j < 10);

echo "<br>";

$i = 10;


do {
    echo $i . "Testando do while" . "<br>" ;
    $i--;
} while ($i > 0);