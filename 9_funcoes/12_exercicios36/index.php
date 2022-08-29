<?php


function total($arr3=[1,2,3,4,5,8,11,80]){

    $arr2 = [];

    for($i = 0; $i < count($arr3); $i++){
        if ($arr3[$i] > 7){
            array_push($arr2, $arr3[$i]);
        }
    }

    return print_r($arr2);

}

total();