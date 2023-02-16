<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "todo";

$conn = new mysqli($servername, $username, $password, $database);

// check connection

if($conn->connect_error) {
    die("Connection Failed". $conn->connect_error);
}

