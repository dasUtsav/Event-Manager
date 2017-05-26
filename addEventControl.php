<?php

session_start();

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

$name = $_POST["name"];
$genre = $_POST["genre"];
$venue = $_POST["venue"];
$date = $_POST["date"];
$summary = $_POST["summary"];

$sql = "INSERT INTO events (name, genre, venue,"."date".", summary)
VALUES ('$name', '$genre', '$venue', '$date', '$summary')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location: homePage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}