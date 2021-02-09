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

		/* if-else */

		echo "<br>";
		
		$z = 20;

		if($z == 20) {
			echo "The value is 20";
		}
		else {
			echo "The value is not 20";
		}

		echo "<br>";

		$s = "str";

		if($s == "stz") {
			echo "Text is stz";
		} elseif ($s == "str") {
			echo "Text is str";
		} else {
			echo "Text is unknown";
		}

		/* Switch */

		echo "<br>";
		$randomNumber = 20;

		switch($randomNumber) {

			case 1: 
				echo "Lucky Number";
				break;
			case 2: 
				echo "Unlcuky Number";
				break;
			case 20: 
				echo "You will get a surprise";
				break;
			default: 
				echo "No match found";
		}

		/* Loops */

		echo "<br>";

		for($p = 1; $p <= 10; $p++) {
			echo $p . "<br>";
		}

		echo "<br>";

		$q = 1;

		while($q <= 10) {
			echo $q . "<br>";
			$q++;
		}

		/* do {} while(expression) */

		echo "<br>";

		$fruits = array("apple", "banana", "mango");

		foreach ($fruits as $value) {
			echo $value . " ";
		}

		echo "<br>";

		$students = array("abc" => "1", "def" => "2");

		foreach ($students as $student => $value) {
			echo "$student = $value" . "<br>";
		}

		/* break vs continue */

		/* strings */

		echo "<br>";
		$sample = "Hello PHP";
		echo "Number of words: " . str_word_count($sample);

		echo "<br>";

		echo "Position: " . strpos($sample, "PHP");

		echo "<br>";

		echo "length: " . strlen($sample);

		echo "<br>";

		// strrev()

		/* PHP Number */

		/* Functions in PHP */

		function greetings() {
			echo "Hello PHP <br>";
		}

		greetings();

		function greetingsWithParameter($msg = "Dummy") {
			echo "Hello PHP " . $msg . "<br>";
		}

		greetingsWithParameter();

		greetingsWithParameter(1);

		// for pass by reference use & before parameter name.

		function expectingReturn() : int {
			return 20;
		}

		$returnValue = expectingReturn(); 

		echo "<br>";
		echo $returnValue;


		/* PHP Super global variable */

		/*$GLOBALS
		$_SERVER
		$_REQUEST
		$_POST
		$_GET
		$_FILES
		$_ENV
		$_COOKIE
		$_SESSION*/

		/* Constant */

		echo "<br>";

		define("pi", 3.1416);

		echo pi;

		/* Regular Expression */

		// preg_match()
		// preg_replace()
		// preg_match_all()

	?>

</body>
</html>