<?php
// removendo elementos do array

$frutas = ["banana", "uva", "kiwi", "pera", "morango"];

$novo = array_splice($frutas, 1, 2);

print_r($novo);