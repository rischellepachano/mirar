<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2ddatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>