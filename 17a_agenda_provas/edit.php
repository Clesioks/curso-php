<?php
include_once("templates/header.php");
?>
<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar Prova</h1>
    <form id="create-form" action="<? $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $prova['id'] ?>">
        <div class="form-group">
            <label for="name">Nome da Disciplina</label>
            <input type="text" class="form-control" id="disciplina" name="disciplina"
                placeholder="Digite uma disciplina" value="<?= $prova['disciplina'] ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Data da prova:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Digite o telefone"
                value="<?= $prova['date'] ?>" required>
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations"
                placeholder="Insira as observações" rows="3"><?= $prova["observations"] ?></textarea>
        </div>

        <div class="btn-pa">
            <button type="submit" class="btn btn-primary ">Atualizar</button>
        </div>

    </form>




</div>

<?php
include_once("templates/footer.php");
?>