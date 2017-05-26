<?php

session_start();

$user = $_SESSION["user"];

$name = $_POST["name"]; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM attending WHERE name = '$name' AND username = '$user'";

if ($conn->query($sql) === TRUE) {
    header("location: homePage.php");
} else {
    echo "Error deleting record: " . $conn->error;
}



