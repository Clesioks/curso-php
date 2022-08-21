<?php

$x = 10;

echo "$x global <br>";

function teste() {

    $x = 15;

    echo "$x local <br>";

}

teste();