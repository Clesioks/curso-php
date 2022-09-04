<?php


$valores = [1,2,3,4,5,8,154,548,10];

function soma($a, $b){
    return $a + $b;
}

$total = array_reduce($valores, "soma" );

echo $total;