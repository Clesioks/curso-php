<?php

$arr = [
    "Serena" => 1,
    "Rafaela" => 11,
    "Karine" => 35,
    "Titi" => 42
];

?>

<ul>
    <?php
foreach($arr as $pessoa => $values){
        ?><li><?php echo $pessoa . " : " . $values . "<br>"; ?></li>
    <?php } ?>
</ul>