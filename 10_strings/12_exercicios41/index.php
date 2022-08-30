<?php

$str = "este item está em promoção";

$w1 = "promoção";

$w2 = "PROMOÇÃO";

$str = str_ireplace($w1, $w2, $str);

echo $str;