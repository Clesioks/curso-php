<?php

include_once "backend.php"

?>

<h1><?= $nome; ?> veja nossas ofertas </h1>

<h2>Confira nossos principais produtos:</h2>
<?php 

foreach ($produtos as $produto){
    echo $produto . "<br>";
}