<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:500,600i" rel="stylesheet">
	<link rel="stylesheet" href="login.css">
</head>
<body>

	<div class="box">

	<form action="loginControl.php" method="POST">

	<div class="header">Login</div>

	<label>Username</label>
	<input type="text" name="user"><br><br>

	<label>Password</label>
	<input type="password" name="pass"><br><br>

	<button type="submit">Login</button><br><br>

	<a href="index.php">New here?</a>

	</form>
	</div>

</body>
</html>