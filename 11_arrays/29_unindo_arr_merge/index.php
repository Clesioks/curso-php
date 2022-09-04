<?php


$arr1 = [1,45,5,5];
$arr2 = [456,45,8,8];
$arr3 = [45,4,8,8,9];

$arrMerge = array_merge($arr1, $arr2, $arr3);

print_r($arrMerge);