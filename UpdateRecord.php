<!DOCTYPE html>
<html>
<head>
	<title>Update Record</title>
</head>
<body>

	<h1>Update Record</h1>

	<?php 

	$f1 = fopen("data.txt", "r");
	$data = fread($f1, filesize("data.txt"));
	fclose($f1);
	$data_after_newline_delimeter = explode("\n", $data);
	$arr1 = array();
	$searchKey = 2;

	for($i = 0; $i < count($data_after_newline_delimeter) - 1; $i++) {
		$json_decoded = json_decode($data_after_newline_delimeter[$i], true);
		if($json_decoded['userId'] === $searchKey) {
			$arr2 = array('userId' => $json_decoded['userId'], 'password' => '510', 'fullName' => "zta");
			array_push($arr1, $arr2);
		}
		else {
			array_push($arr1, $json_decoded);
		}
	}


	$f2 = fopen("data.txt", "w");
	for($j = 0; $j < count($arr1); $j++) {
		$json_encoded = json_encode($arr1[$j]);
		fwrite($f2, $json_encoded . "\n");
	}
	fclose($f2);

	?>

</body>
</html>