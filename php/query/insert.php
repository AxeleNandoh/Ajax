<?php 

require_once('../config.php');

$firstName = $connection->real_escape_string($_POST['firstName']);
$lastName = $connection->real_escape_string($_POST['lastName']);
$email = $connection->real_escape_string($_POST['email']);

$sqlQuery = "INSERT INTO users (firstname, lastname, email) VALUES ('$firstName', '$lastName', '$email')";

if($connection->query($sqlQuery) === true){

   $data = [
    "message" => 'Riga Inserita Correttamente.',
    "responseCode" => 0
    ];
    echo json_encode($data);    
    
}else{
    
    $data = ["message" => $connection->error];
    echo json_encode($data);
}


?>