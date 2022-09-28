<?php

include_once("config/url.php");
include_once("config/process.php");

// limpa a mensagem

if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}



?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootsrap -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.min.css"
            integrity="sha512-siwe/oXMhSjGCwLn+scraPOWrJxHlUgMBMZXdPe2Tnk3I0x3ESCoLz7WZ5NTH6SZrywMY+PB1cjyqJ5jAluCOg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- CSS -->
        <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
        <!-- JAVASCRIPT -->
        <script src="js/custom.js"></script>
        <title>Agenda de provas</title>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                    <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
                </a>
                <div>
                    <div class="navbar-nav">
                        <a class="nav-link active" href="<?= $BASE_URL ?>index.php" id="home-link">
                            <div class="cor-preta">Agenda de Provas</div>
                        </a>
                        <a class="nav-link active" href="<?= $BASE_URL ?>create.php" id="home-link2">
                            <div class="cor-preta">Adicionar Prova</div>
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Inicio Modal cadastrar usuario -->
            <div class="modal fade" id="visUsuarioModal" tabindex="-1" aria-labelledby="visUsuarioModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="visUsuarioModalLabel">Prova</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span id="msgAlertaErroVis"></span>
                            <dl class="row">
                                <dt class="col-sm-3">ID</dt>
                                <dd class="col-sm-9"><span id="idUsuario"></span></dd>
                                <dt class="col-sm-3">Disciplina</dt>
                                <dd class="col-sm-9"><span id="nomeUsuario"></span></dd>
                                <dt class="col-sm-3">Data:</dt>
                                <dd class="col-sm-9"><span id="telefoneUsuario"></span></dd>
                                <dt class="col-sm-3">Observações</dt>
                                <dd class="col-sm-9"><span id="obsUsuario"></span></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim Modal cadastrar usuario -->
        </header>