<?php
	session_start();

	$user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Home Page</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script src="https://use.fontawesome.com/1334479139.js"></script>
	<link rel="stylesheet" type="text/css" href="homepage.css">

</head>
<body>

<div class="banner">
	<h1>Event Manager</h1>
	<p>Manage your events with ease</p>
</div>

<div class = "content-wrapper">
<div class = "events">
<a href="addEvent.php" class="add"><i class="fa fa-plus" aria-hidden="true"></i>  Add Event</a>

<?php

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

$sql = "SELECT * FROM events";
$result = $conn->query($sql);

if($result->num_rows > 0){
	//output of each row
	while($row = $result->fetch_assoc()){?>
	<div class="records">

		<h3><?php echo $row["name"]?></h3> <h6>Genre: </h6>	<?php echo $row["genre"]?><br><h6>Venue: </h6><?php echo " ".$row["venue"]?><br> <h6>Date: </h6><?php echo " ".$row["date"]?><br>
		<h6>Summary: </h6><?php echo " ".$row["summary"]?><br>

		<form action="registerControl.php" method="POST">
		<input type="hidden" name="name"
		 value="<?php echo $row["name"]; ?>" >
		<button type="submit">Register</button>
		</form>
		</div>
<?php

	}
}

else{
	echo "The table is empty brah.";
}

?>

</div>

<div class = "registered">

<div class = "welcome"><?php echo "Welcome,  ".$_SESSION["user"]; ?>
<a href="logOutControl.php" class="out">Log Out</a>
</div>

<h2>Your Events</h2>

<?php

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

$sql = "SELECT* FROM attending WHERE username = '$user'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	//output of each row
	while($row = $result->fetch_assoc()){?>
	<div class = "unsubscribe">
	<?php
		echo $row["name"];

	?>

<form action = "unsubscribe.php" method = "POST">
<input type="hidden" name = "name" value = "<?php echo $row["name"]; ?>">
<button type="submit" id = "trash" <i class="fa fa-trash" aria-hidden="true"></i></button>
</form>
</div>

<?php
	}
 }
?>
</div>

</div>

</body>
</html>
