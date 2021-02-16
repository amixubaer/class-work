<!DOCTYPE html>
<html>
<head>
	<title>PHP Date</title>
</head>
<body>
	<h1>PHP Date</h1>

	<?php

		echo date('d-M-Y');

		echo "<br>";

		echo date('d/M/Y'); 

		echo "<br>";

		echo date('d.M.Y'); 

		echo "<br>";

		echo "&copy " . date('Y') . " ABC Inc";

		echo "<br>";

		date_default_timezone_set("Asia/Dhaka");

		echo date('h:i a'); 

		// strtotime -- from string to time


	?>

</body>
</html>