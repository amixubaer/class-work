<?php 

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Example</title>
</head>
<body>

	<h1>Session Example</h1>

	<?php 

		$_SESSION['userId'] = 'abc';
		$_SESSION['password'] = "123";

		echo "User Id is: " . $_SESSION['userId'];
		echo "<br>";
		echo "Password is: " . $_SESSION['password'];

		session_unset();
		session_destroy();

		/*echo "User Id is: " . $_SESSION['userId'];
		echo "<br>";
		echo "Password is: " . $_SESSION['password'];*/
	?>

</body>
</html>