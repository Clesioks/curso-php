<?php

$validacoes = [];

if(count($_POST)>0){   

    if($_POST['nome'] === ""){
        $validacoes[] = "Por favor preencha um nome";
    }
    if($_POST['email'] === ""){
        $validacoes[] = "Por favor preencha um email";
    }

    if($_POST['senha'] != $_POST['confirmacao']){
        $validacoes[] = "As senhas não conferem...";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Validação de formulário</title>
</head>

<body>
    <?php if(count($validacoes)) : ?>
    <ul>
        <?php foreach($validacoes as $validacao): ?>
        <li><?= $validacao ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <form action="index.php" method="POST">

        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu email">
        </div>
        <div>
            <input type="passwrod" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="passwrod" name="confirmacao" placeholder="Confirme sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>




    </form>

</body>

</html>