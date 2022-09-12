<?php


$data = new DateTime();


print_r($data);
echo "<br>";
echo "<br>";


$data->setDate(1999,12,01);

print_r($data);
echo "<br>";
echo "<br>";



$data->setTime(05,12,10);
echo "<br>";
echo "<br>";


print_r($data);