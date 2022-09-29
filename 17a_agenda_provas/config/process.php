<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;


// MODIFICAÇÕES NO BANCO
if(!empty($data)) {


    //criar contato
    if($data["type"] === "create"){

        $disciplina = $data["disciplina"];
        $date = $data["date"];
        $observations = $data["observations"];

        $query = "INSERT INTO provas (disciplina, date, observations) VALUES (:disciplina, :date, :observations)";
        
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":disciplina", $disciplina);
        $stmt->bindParam(":date", $date);
        $stmt->bindParam(":observations", $observations);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Prova agendada com sucesso!";


} catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error";
}
    } else if($data["type"] === "edit") {

        $disciplina = $data["disciplina"];
        $date = $data["date"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE provas SET date = :date, disciplina = :disciplina,
        observations = :observations WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":date", $date);
        $stmt->bindParam(":disciplina", $disciplina);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Prova editada com sucesso!";


} catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error";
}
    }    else if ($data["type"] === "delete") {

        $id = $data["id"];

        $query = "DELETE FROM provas WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);


            try {

            $stmt->execute();
            $_SESSION["msg"] = "Prova deletada com sucesso!";


} catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error";
}   

    }

    // redirect home

    header("Location:" . $BASE_URL . "../index.php");


    // SELEÇÃO DE DADOS
} else {

    $id;

if(!empty($_GET)) {
    $id = $_GET["id"];
}
    // retorna um contato

if(!empty($id)) {
    
    $query = "SELECT * FROM provas WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $prova = $stmt->fetch();

} else {

    // retorna todos contatos
    $provas = [];
    
    $query = "SELECT * FROM provas ORDER BY date ASC";
    
    $stmt = $conn->prepare($query);
    
    $stmt->execute();
    
    $provas = $stmt->fetchAll();
}

}

// FECHAR CONEXAO

$conn = null;






?>