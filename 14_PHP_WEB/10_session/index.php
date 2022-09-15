<?php

session_start();

// print_r($_SESSION);

$_SESSION['nome'] = "TiTi";

$nome = $_SESSION['nome'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Session</title>
</head>

<body>

    <h1>Olá Session, seu nome é <?= $nome ?></h1>

</body>

</html>