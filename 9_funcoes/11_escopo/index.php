<?php

$a = 10;

$b = 100;

function numero(){

    $a = 5;
    global $b;
    $b++;
    echo "Escopo funcao $a";

    static $c = 0;

    $c++;
echo "<br>";

    echo "Escopo static $c";


}

echo "<br>";

echo "Escopo global $a";

echo "<br>";

echo numero();

echo "<br>";

echo numero();
echo "<br>";


echo $b;

echo "<br>";

echo numero();