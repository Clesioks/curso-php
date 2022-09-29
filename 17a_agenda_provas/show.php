<?php
include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title"><?= $prova["disciplina"]; ?></h1>
    <p class="bold">Data:</p>
    <p><?= $prova["date"] = implode("/",array_reverse(explode("-",$prova["date"]))); ?></p>
    <p class="bold">Observações:</p>
    <p><?= $prova["observations"]; ?></p>
</div>


<?php
include_once("templates/footer.php");
?>