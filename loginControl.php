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

if(isset($_POST["user"], $_POST["pass"])) 
    {     

        $user = $_POST["user"]; 
        $pass = $_POST["pass"]; 

        $sql = "SELECT username, password FROM people WHERE username = '".$user."' AND  password = '".$pass."'";

        $result = $conn->query($sql);

        if($result->num_rows > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["user"] = $user;
            header("location: homePage.php"); 
        }
        else
        {
            echo 'The username or password entered is incorrect! Good luck figuring out which one :)';
        }
}