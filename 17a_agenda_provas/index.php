<?php
include_once("templates/header.php");
?>
<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Agenda de provas</h1>
    <span id="msgAlerta"></span>
    <?php if(count($provas) > 0): ?>
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Data</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($provas as $prova): ?>
            <tr>
                <td scope="row" class="col-id"><?= $prova["id"] ?></td>
                <td scope="row"><?= $prova["disciplina"] ?></td>
                <td scope="row"><?= $prova["date"] = implode("/",array_reverse(explode("-",$prova["date"]))); ?></td>
                <td>
                    <!-- <a href="<?= $BASE_URL ?>show.php?id=<?= $prova["id"] ?>"><i
                            class="fas fa-eye check-icon"></i></a> -->
                    <a href="#" onclick="visUsuario(<?= $prova['id'] ?>)"><i class="fas fa-eye check-icon"></i></a>
                    <a href="<?= $BASE_URL ?>edit.php?id=<?= $prova['id'] ?>"><i class=" far fa-edit edit-icon"></i></a>
                    <form class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="id" value="<?= $prova["id"] ?>">
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
    <p id="empty-list-text">Não há contatos na agenda, <a href="
        <?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
</div>

<?php
include_once("templates/footer.php");
?>