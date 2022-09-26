<?php

include_once("db.php");


?>

<h1>Insira um carro:</h1>

<form action="process.php" method="POST">

    <div>
        <label for="brand">Marca do Carro: </label>
        <input type="text" name="brand" placeholder="Insira uma marca">
    </div>
    <div>
        <label for="km">Kilometragem: </label>
        <input type="text" name="km" placeholder="Insira uma kilometragem">
    </div>
    <div>
        <label for="color">Cor do Carro: </label>
        <input type="text" name="color" placeholder="Insira uma cor">
    </div>
    <input type="submit" value="Salvar">
</form>