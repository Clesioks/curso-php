<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";


$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$id = 6;

$stmt = $conn->prepare("UPDATE frutas SET nome = ? WHERE id = ?");

$nome = "Banana";

$stmt->bind_param("si", $nome, $id);

$stmt->execute();

if($stmt->error){
    echo "Erro:" . $stmt->error;
}

$conn->close();