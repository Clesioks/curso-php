<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";


$conn = new mysqli($host, $user, $pass, $db);

$q = "CREATE TABLE times(nome VARCHAR(100), titulos INT)";

$q = "DROP TABLE times";


$conn->query($q);

$conn->close();