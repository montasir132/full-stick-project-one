<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "news";


$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if($conn->connect_error) {
    die($conn -> error);
}else{
    // echo "db Connected successfully";
}
?>