<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		echo $_POST['fname'] . " " . $_POST['lname'];
		// echo $_REQUEST['fname'] . " " . $_REQUEST['lname'];
	?>

</body>
</html>