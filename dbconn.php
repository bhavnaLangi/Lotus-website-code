<?php
$servername = "localhost";
$username = "lotusdevelopers_live";
$password = "-Vpe%p79XO3z";
$dbname = "lotusdevelopers_live";

// $username = "root";
// $password = "";
// $dbname = "lotus";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>