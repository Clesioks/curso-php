<?php

require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");

$message = new Message($BASE_URL);

$userDao = new UserDAO($conn, $BASE_URL);

// resgata o tipo

$type = filter_input(INPUT_POST, "type");

// atualizar usuário
if($type === "update") {

    // resgata dados do usuário
$userData = $userDao->verifyToken();

print_r($userData);

    // atualizar senha do usuário
} else if ($type === "changepassword") {

    
} else {
    $message->setMessage("Informações inválidas!", "error", "index.php");
}