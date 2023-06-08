<?php 

require_once('config.php');

$nome = '';
$cognome = '';
$email = '';

$query = "INSERT INTO users(nome, cognome, email) VALUES ($nome, $cognome, $email)";

// if($result) {
//     if($result->num_rows > 0) {

//         $data = [];

//         while($row = $result->fetch_array(MYSQL_ASSOC)){

//             $temp;
//             $temp['id'] = $row['id'];
//             $temp['nome'] = $row['nome'];
//             $temp['cognome'] = $row['cognome'];
//             $temp['email'] = $row['email'];
//             array_push($data, $tmp);
//         }
//         echo json_encode($data);

//     }else {
//         'non ci sono righe disponibili...';
//     }

// }else{
//     echo"Errore nella connesione al DB: ". $connection->error;
// }

?>