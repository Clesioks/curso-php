<?php

require_once("templates/header.php");

require_once("models/User.php");
require_once("dao/UserDAO.php");

$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

?>

<div id="main-container" class="container-fluid ">
    <div class="offset-md-4 col-md-4 new-movie-container">
        <h1 class="page-title alterar-container">Adicionar Filme</h1>
        <p class="page-description">Adicione sua crítica e compartilhe com o mundo</p>
        <form action="<?= $BASE_URL ?>movie_process.php" id="add-movie-form" method="POST"
            enctype="multipart/form-data">
            <input type="hidden" name="type" value="create">
            <div class="form-group alterar-container">
                <label for="title" class="alterar-container">Título:</label>
                <input type="text" class="form-control" id="title" name="title"
                    placeholder="Digite o título do seu filme">

            </div>
            <div class="form-group alterar-container">
                <label for="image" class="alterar-container">Imagem:</label><br>
                <input type="file" class="form-control-file" name="image" id="image">
            </div>
            <div class="form-group alterar-container">
                <label for="length" class="alterar-container">Duração:</label>
                <input type="text" class="form-control" id="length" name="length"
                    placeholder="Digite a duração do filme">

            </div>
            <div class="form-group alterar-container">
                <label for="category" class="alterar-container">Categoria:</label>
                <select name="category" id="category" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Ação">Ação</option>
                    <option value="Drama">Drama</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Fantasia / Ficção">Fantasia / Ficção</option>
                    <option value="Romance">Romance</option>
                </select>
            </div>
            <div class="form-group alterar-container">
                <label for="trailer" class="alterar-container">Trailer:</label>
                <input type="text" class="form-control" id="trailer" name="trailer"
                    placeholder="Insira o link do trailer">

            </div>
            <div class="form-group alterar-container">
                <label for="trailer" class="alterar-container">Descrição:</label>
                <textarea name="description" id="description" rows="5" class="form-control"
                    placeholder="Descreva o filme...">
                </textarea>
            </div>
            <input type="submit" class="btn-nosso alterar-container" value="Adicionar filme">
        </form>
    </div>

</div>

<?php

require_once("templates/footer.php");

?>