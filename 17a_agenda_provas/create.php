<?php
include_once("templates/header.php");
?>
<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Agendar Prova</h1>
    <form id="create-form" action="<? $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Disciplina</label>
            <input type="text" class="form-control" id="disciplina" name="disciplina"
                placeholder="Digite uma disciplina" required>
        </div>
        <div class="form-group">
            <label for="phone">Data da prova:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="Digite a data da prova" required>
        </div>
        <div class="form-group">
            <label for="observations">Observações:</label>
            <textarea type="text" class="form-control" id="observations" name="observations"
                placeholder="Insira as observações" rows="3"></textarea>
        </div>

        <div class="btn-pa" id="rodape">
            <button type="submit" class="btn btn-primary ">Cadastrar</button>
        </div>

    </form>




</div>

<?php
include_once("templates/footer.php");
?>