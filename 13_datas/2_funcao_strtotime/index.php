<?php

$cincoDias = strtotime("5 days");

echo $cincoDias . "<br>";

$dataMaisCinco = date("d/m/y", $cincoDias);

echo $dataMaisCinco;