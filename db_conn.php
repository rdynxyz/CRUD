<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("connection_failed". mysqli_connect_error());
}
// echo "Connected succesfully";
?>