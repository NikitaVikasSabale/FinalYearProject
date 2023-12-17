<?php
$server = "localhost";
$username_server = "root";
$password_server = "";
$database = "forest";

$conn = mysqli_connect($server, $username_server, $password_server, $database);
if (!$conn){
    die("Error".mysqli_connect_error());
}

?>