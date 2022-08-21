<?php


$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 20;

echo "Referenciada";

echo $x;
echo "<br>";
echo $y;
echo "<br>";

echo "Normal";

$x = 25;

echo $x;
echo "<br>";
echo $y;
echo "<br>";