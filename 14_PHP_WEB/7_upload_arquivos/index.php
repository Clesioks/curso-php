<?php

if(isset($_FILES)){
    print_r($_FILES);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Upload de arquivo</title>
</head>

<body>

    <form action="index.php" method="POST" enctype="multipart/form-data">

        <div>

            <input type="file" name="image">
        </div>
        <input type="submit" value="Enviar">



    </form>

</body>

</html>