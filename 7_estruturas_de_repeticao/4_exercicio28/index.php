<?php


$contador = 4;

while(30 > $contador) {
 echo $contador . "<br>";
    $contador = $contador + 2 ;
 if($contador === 24){
     echo "Contador parou no 24...";
     break;
 }
}