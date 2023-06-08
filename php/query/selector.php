<?php 

require_once('../config.php');

$query = 'SELECT * FROM users';
$result = $connection->query($query);

if($result) {
    if($result->num_rows > 0) {

        $data = [];

        while($row = $result->fetch_array(MYSQLI_ASSOC)){

            $temp;
            $temp['id'] = $row['id'];
            $temp['firstName'] = $row['firstName'];
            $temp['lastName'] = $row['lastName'];
            $temp['email'] = $row['email'];
            array_push($data, $temp);
        }
        echo json_encode($data);

    }else {
        'non ci sono righe disponibili...';
    }

}else{
    echo"Errore nella connesione al DB: ". $connection->error;
}

?>