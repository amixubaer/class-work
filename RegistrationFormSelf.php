<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Self</title>
</head>
<body>

	<h1>Registration Form Self</h1>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		<!-- Input Text Field -->
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname">

		<br>

		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname">

		<br>

		<label for="pass">Password</label>
		<input type="password" name="passw" id="pass"> 

		<br>

		<!-- Input submit -->
		<input type="submit" value="Submit">

	</form>

	<?php 	

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			echo $_POST['fname'] . " " . $_POST['lname'];
		}
	?>

</body>
</html>