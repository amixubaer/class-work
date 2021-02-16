<!DOCTYPE html>
<html>
<head>
	<title>PHP Exception</title>
</head>
<body>

	<h1>PHP Exception</h1>

	<?php

		// try, catch, finally throw

		try {
			throw new Exception("Error Processing Request");
		}
		catch(Exception $e) {
			echo "There was an expcetion.";
		}
		finally {
			echo "Finally block executed";
		}

		function test() {
			throw new Exception("Error in test");
		}

		try {
			test();
		}
		catch(Exception $ex) {
			echo "Caught";
		}
	?>

</body>
</html>