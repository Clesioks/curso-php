<?php

$itens = ["tomate", "cebola", "arroz"];

function super($arr) {

$strItens = implode(",", $arr);

return $strItens;

}

echo super($itens);

echo "<br>";


echo "<br>";

if (is_string(super($itens))) {
    echo "A função super retorna uma string";

} else {
    echo "Não é string";
}