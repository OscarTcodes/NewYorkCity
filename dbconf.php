<?php 

// Connects to the database
$servername = "localhost";
$username="ogt7517";
$password = "Clamant5+attaboy";
$dbname = "ogt7517";
$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
};

?>