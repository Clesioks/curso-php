<?php

$i = 0;

while ($i < 10) {
    echo "loop externo $i " . "<br>";

    $i++;

    $j = 0;

    while($j < 3) {
        echo "loop interno $j " . "<br>";

        $j++;
    }

    
}