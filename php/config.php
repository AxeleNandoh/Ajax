<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "tutorial_midali";

$connection = new mysqli($host, $user, $password, $db);

if($connection === false) {

    die("Could not connect to the database: " . $db . "Sorry, please try again." . $connection->$connect_error);
}

?>