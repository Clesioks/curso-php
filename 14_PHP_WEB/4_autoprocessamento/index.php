<?php

$metodo = $_SERVER['REQUEST_METHOD']



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Autoprocessamento</title>
</head>

<body>

    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" value="Digite seu nome">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>

</html>