<?php

if(isset($_POST['ingredientes'])){
    
    $ingredientes = $_POST['ingredientes'];


    print_r($ingredientes);




}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="cebola"> Cebola
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="arroz"> Arroz
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="banana"> Banana
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>

</html>