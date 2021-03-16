<!DOCTYPE html>
<html>
<head>
	<title>Json PHP</title>
</head>
<body>

	<h1>Json PHP</h1>

	<?php

	$filepath = "data.txt"; 

	$studentName = $_POST['studentName'];
	$gender = $_POST['gender'];
	$courses = $_POST['courses'];

	$arr1 = array('name' => $studentName, 'gender' => $gender, 'courses' => $courses);
	$f1 = fopen($filepath, "w");
	$arr1_encode = json_encode($arr1);
	fwrite($f1, $arr1_encode);
	fclose($f1);


	?>

</body>
</html>