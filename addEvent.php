<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Event</title>
	<link rel="stylesheet" type="text/css" href="addEvent.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:500,600i" rel="stylesheet">
</head>
<body>

	<form action="addEventControl.php" method="POST" name="registration">

		<h1>Add Event</h1><br>

		<div class = "box">

		<div class="name">

		<label for="name">Enter the name</label><br>		
		<input type="text" name="name"><br><br>
		<button id="name">Next</button><br><br>

		</div>

		<div class="genre">

		<label>Enter the genre</label>
		<input type="text" name="genre"><br><br>
		<button id="genre">Next</button>

		</div>

		<div class="venue">

		<label>Enter the venue</label>
		<input type="text" name="venue"><br><br>
		<button id="venue">Next</button>

		</div>

		<div class="date">

		<label>Set the date</label>
		<input type="date" name="date"><br><br>
		<button id="date">Next</button>

		</div>

		<div class="summary">

		<label>Please provide a summary to boot as well</label><br><br>
		<textarea name="summary" cols="80" rows="5" maxlength="250"></textarea><br><br>

		</div>

		
		<div class="submit"><button type="submit">Confirm</button></div>

		<div class = "box">

	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
	<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
	<script src="event-validation.js"></script>
	<script src="slide.js"></script>

</body>
</html>