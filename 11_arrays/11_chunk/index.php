<?php

$arr = range(1, 20);

print_r(array_chunk($arr, 4));

$arrays = array_chunk($arr, 10);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

print_r($arrays);
echo "<br>";
echo "<br>";


print_r($arrays[0]);