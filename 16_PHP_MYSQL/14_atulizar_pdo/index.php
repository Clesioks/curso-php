<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

// ASSUNTO DA AULA

$id = 6;
$nome = "Banana do Mato";

$stmt = $conn->prepare("UPDATE frutas SET nome = :nome WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);

$stmt->execute();