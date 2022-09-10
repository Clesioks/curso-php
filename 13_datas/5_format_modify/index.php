<?php

$data = new DateTime();

echo $data->format("d / m / y") . "<br>";


echo $data->format("D / M / Y") . "<br>";


$data->modify('+ 5 years');

echo $data->format("d / m / y") . "<br>";