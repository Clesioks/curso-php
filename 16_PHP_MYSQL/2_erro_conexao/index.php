<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophps";


$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
    echo "Erro na conexão com o banco de dados <br>";
    echo "Erro: " . mysqli_connect_error();
}