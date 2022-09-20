<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";


$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$nome = "Parana";
$titulos = 5;

$stmt = $conn->prepare("INSERT INTO times (nome, titulos) VALUES (?, ?)");

$stmt->bind_param("si", $nome, $titulos);

$stmt->execute();