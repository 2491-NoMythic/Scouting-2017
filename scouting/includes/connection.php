<?php
$servername = "localhost";
$username = "root";
$password = "2491";
$dbname = "nomythic-scouting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
