<!DOCTYPE html>
<html>
<head>
	<title>PHP File Example</title>
</head>
<body>

	<h1>PHP File Example</h1>

	<?php

		$filePath = "data.txt";

		echo readfile($filePath);

		echo "<br>";

		echo fopen($filePath, "r");

		echo "<br>";

		$f = fopen($filePath, "r");

		echo "filesize is: " . filesize($filePath);

		echo "<br>";

		echo fread($f, filesize($filePath));

		fclose($f);

		echo "<br>";

		$f1 = fopen($filePath, "r");

		echo fread($f1, filesize($filePath) - 1);

		fclose($f1);

		// fgets()
		// fgetc()
		// feof()

		// diff w vs a

		// $f2 = fopen($filePath, "w");

		$f2 = fopen($filePath, "a");

		fwrite($f2, "\ndef");

		fclose($f2);

		// x+, r+, w+, a+, c, c+

		

	?>

</body>
</html>