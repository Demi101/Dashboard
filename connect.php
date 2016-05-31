<?php
// <<<<<<< Updated upstream
// $servername = "192.168.0.42";
// $username = "root";
// $password = "admin";
// =======
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "daimler";

//test text

// >>>>>>> Stashed changes

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>