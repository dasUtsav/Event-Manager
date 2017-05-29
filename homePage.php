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

		<h3><?php echo $row["name"]?></h3><?php echo "Genre: ".$row["genre"]."<br> Venue: ".$row["venue"]."<br> Date: ".$row["date"]."<br> Summary: ".$row["summary"]."<br>";

?>
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

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>
