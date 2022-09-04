<?php


$arr = [
    "TiTi" => 1,
    "Karine" => 2,
    "Serena" => 3,
    "Rafaela" => 4,
];

arsort($arr);

?>

<table border="1">

    <tr>

        <td>Nome:</td>
        <td>Pontuação:</td>
    </tr>
    <tr align="center">

        <td>
            <?php foreach($arr as $ranking => $values){
                echo $ranking . "<br>";
            } ?>
        </td>
        <td>
            <?php foreach($arr as $ranking => $values){
            echo $values . "<br>";
        } ?>
        </td>
    </tr>


</table>