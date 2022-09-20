<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

// ASSUNTO DA AULA

$stmt = $conn->prepare("INSERT INTO frutas (nome) VALUES (:nome)");

$nome = "Jaca";

$stmt->bindParam(":nome", $nome);

$stmt->execute();