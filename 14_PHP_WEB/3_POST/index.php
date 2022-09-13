<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>POST</title>
</head>

<body>

    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Teto Solar">Teto Solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Película">Película
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Blindado">Blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>

</html>