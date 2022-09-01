<?php

$str = "Cadê meu queijo? Ele estava aqui em cima";

echo $str . "<br>";

$estava = substr($str, 21, -13);

echo $estava . "<br>";

$queijo = substr($str, 10, 6);

echo $queijo . "<br>";