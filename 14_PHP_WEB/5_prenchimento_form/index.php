<?php

$usuario = [
    'nome' => 'TiTi',
    'idade' => 42,
    'profissao' => 'programador'
];

if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form action="">

        <div>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissao" placeholder="Digite sua profissão" value="<?= $profissao ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>

</html>