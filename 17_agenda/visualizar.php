<?php

// conexão com o DB

include_once('config/connection.php');

// receber o id

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


if(!empty($id)) {

   $query_usuario = "SELECT * FROM contacts WHERE id = :id LIMIT 1";

   $stmt = $conn->prepare($query_usuario);
   $stmt->bindParam(':id', $id);
   $stmt->execute();

   if(($stmt)and($stmt->rowCount() != 0)){
    $row_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
   $retorna = ['status' => true, 'dados' => $row_usuario];

   } else{
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Nenhum usuário encontrado</div>"];
   }

    

} else {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Nenhum usuário encontrado</div>"];
}

echo json_encode($retorna);