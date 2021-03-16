<!DOCTYPE html>
<html>
<head>
	<title>Json Array</title>
</head>
<body>

	<h1>Json Array</h1>

	<?php 

	$filepath = "data.txt";
	/*$arr1 = array('name' => 'abc', 'gender' => 'male'); // {name: abc, gender: male}
	$arr1_encoded = json_encode($arr1);
	$f1 = fopen($filepath, "w");
	fwrite($f1, $arr1_encoded . "\n");*/


	$arr2 = array("apple", "pineapple", "lemon"); // {name: abc, gender: male}
	$arr2_encoded = json_encode($arr2);
	$f2 = fopen($filepath, "w");
	fwrite($f2, $arr2_encoded . "\n");

	$f3 = fopen($filepath, "r");
	$data = fread($f3, filesize($filepath));
	$data_explode_by_newline = explode("\n", $data);
	$data_decoded = json_decode($data_explode_by_newline[0]);	

	echo "<br>";
	print_r($data_decoded);
	echo "<br>";
	echo $data_decoded[0];
	echo "<br>";
	echo $data_decoded[1];
	echo "<br>";
	echo $data_decoded[2];

	?>

</body>
</html>