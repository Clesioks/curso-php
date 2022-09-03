<?php

$arr = range(10, 45, 6);

print_r($arr);

echo "<br>";

for($i = 0; $i < count($arr); $i++){
    echo $arr[$i] . "<br>";
    if($arr[$i] > 30){
        echo "O número " . $arr[$i] . " é muito alto. <br>";
    }
}