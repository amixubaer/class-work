<!DOCTYPE html>
<html>
<head>
	<title>PHP Detail</title>
</head>
<body>

	<?php
		// This is comment
		# echo "Hello PHP";

		/*
			This is a multi line comment
		*/ 

		/* echo vs print */
		echo "Hello PHP";
		echo "<br>";
		print "Hello PHP";

		/* Data type */
		// String
		// Float
		// Integer
		// Boolean
		// Array
		// Object
		// NULL

		echo "<br>";

		// How to declare a variable in PHP
		$x = "PHP";
		$y = "Learn";

		echo $x . " " . $y;
		echo "<br>";

		$a = "10";
		$b = 10.5;

		echo $a + $b;
		echo "<br>";

		var_dump($a);
		var_dump($b);

		$c = true;
		var_dump($c);

		$fruits = array("Apple", "Banana", 20);
		var_dump($fruits);

	?>

</body>
</html>