<?php

session_start();

$_SESSION["user"] = $_POST['user'];
$_SESSION["pass"] = $_POST['pass'];

$user = $_SESSION["user"];
$pass = $_SESSION["pass"];

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

$sql = "INSERT INTO people (username, password)
VALUES ('$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    session_unset();
    session_destroy();
    header("location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
