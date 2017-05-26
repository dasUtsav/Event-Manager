<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>


	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:500,600i" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


</head>
<body>

	<div class="container">

	<form action="signUpControl.php" method="POST" name="registration">

		<div class="header">Sign Up</div>

		<label for="fn">First Name</label>
		<input type="text" name="fn"><br><br>

		<label for="ln">Last Name</label>
		<input type="text" name="ln"><br><br>

		<label for="user">Username</label>
		<input type="text" name="user"><br><br>

		<label for="pass">Password</label>
		<input type="password" name="pass"><br><br>

		<label for="email">Email</label>
		<input type="text" name="email"><br><br>

		<button type="submit">Continue</button>

	</form>

	<br><br>

	<a href="login.php">Already signed in?</a>

	</div>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
	<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
	<script src="form-validation.js"></script>


</body>
</html>