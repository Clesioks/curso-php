<?php



$arr = ["Serena", "Rafaela","Karine",10, 20, true, "TiTi"];

$j = 0;

while($j < count($arr)) {
    if(is_string($arr[$j])){
        echo "<br>" . $arr[$j];
    }
    $j++;
}


?>