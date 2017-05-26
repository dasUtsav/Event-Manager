<?php

session_start();

$user = $_SESSION["user"];
$_SESSION["name"] = $_POST["name"];
$name = $_SESSION["name"];

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

$count = "SELECT name FROM attending WHERE name = '$name'";
$countResult = $conn->query($count);

$count1 = "SELECT username, name FROM attending WHERE username ='$user' AND name = '$name'";
$countResult1 = $conn->query($count1);

if($countResult1->num_rows > 0){   
    $message = "You have already registered for this event!";
    $_SESSION["message"] = $message;
    header("location: seatsFull.php");
}

else if($countResult->num_rows >= 3){
    $message = "All seats are full! You are now on the waiting list. Try registering later!";
    $_SESSION["message"] = $message;
    header("location: seatsFull.php");
}

else{
    $sql = "INSERT INTO attending (username, name)
    VALUES ('$user', '$name')";

    if($conn->query($sql) === TRUE){
        header("location: homePage.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}