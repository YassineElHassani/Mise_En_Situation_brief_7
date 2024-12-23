<?php 
$serverName = "localhost";
$username = "root";
$password = "";
$database = "user_role";

$conn = new mysqli($serverName, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
