<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500,600i" rel="stylesheet">
	<link rel="stylesheet" href="seatsFull.css">
    <title>Document</title>
</head>
<body>
    <div class="box">
    <div class="header"><?php echo $_SESSION["message"]; ?></div>
    <a href="homePage.php">Casa Dolce Casa</a>
    </div>
</body>
</html>