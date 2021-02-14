<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Self</title>
</head>
<body>

	<h1>Registration Form Self</h1>

	<?php
		$firstNameErr = $lastNameErr = $websiteErr = "";
		$firstName = ""; 
		$lastName = ""; 
		$website = "";

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the first name properly";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the last name properly";
			}
			else {
				$lastName = $_POST['lname'];
			}

			if(empty($_POST['website'])) {
				$websiteErr = "Please fill up the website url properly";
			}
			else {
				$website = $_POST['website'];
			}

			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  				$websiteErr = "Invalid URL";
			}
			else {
				$website = $_POST['website'];
			}
		}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		<!-- Input Text Field -->
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname" value="<?php echo $firstName; ?>"> 
		<p style="color:red"><?php echo $firstNameErr; ?></p>

		<br>

		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
		<p><?php echo $lastNameErr; ?></p>
		
		<br>

		<label for="website">Website</label>
		<input type="url" name="website" id="website" value="<?php echo $website ?>">
		<p><?php echo $websiteErr; ?></p>
		
		<br>

		<!-- Input submit -->
		<input type="submit" value="Submit">

	</form>

</body>
</html>