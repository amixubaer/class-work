<?php 
	setcookie("user_id", "abc", time() + 3600);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookie Example</title>
</head>
<body>

	<h1>Cookie Example</h1>

	<?php 

		$val = count($_COOKIE);

		if($val > 0) {
			echo "Cookie enabled";
		}
		else {
			echo "Cookie disabled";
		}

		if(isset($_COOKIE["user_id"])) {
			echo "Name of the cookie is: " . $_COOKIE["user_id"];
		}
		else {
			echo "user_id" . " cookie not set";
		}
	?>

</body>
</html>