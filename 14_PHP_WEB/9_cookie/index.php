<?php

setcookie("nome", "TiTi", time() + 3600);

if(isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>

<body>

    <h1>Olá mundo meu nome é <?= $nome ?></h1>

</body>

</html>