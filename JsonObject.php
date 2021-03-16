<!DOCTYPE html>
<html>
<head>
	<title>Json Object</title>
</head>
<body>

	<h1>Json Object</h1>

	<?php 

		$arr1 = array('userId' => 1, 'password' => '123', 'name' => 'abc');
		$json_encoded_1 =  json_encode($arr1);

		$arr2 = array('userId' => 2, 'password' => '456', 'name' => 'def');
		$json_encoded_2 =  json_encode($arr2);

		$arr3 = array('userId' => 3, 'password' => '789', 'name' => 'ghi');
		$json_encoded_3 =  json_encode($arr3); 

		$file1 = fopen("data.txt", "w");
		fwrite($file1, $json_encoded_1 . "\n");
		fwrite($file1, $json_encoded_2 . "\n");
		fwrite($file1, $json_encoded_3 . "\n");
		fclose($file1);

		$file2 = fopen("data.txt", "r");
		$data = fread($file2, filesize("data.txt"));
		fclose($file2);

		// print_r($data);

		$data_explode_by_newline = explode("\n", $data);

		// print_r($data_explode_by_newline);

		for($i = 0; $i < count($data_explode_by_newline); $i++) {
			$json_decoded_text = json_decode($data_explode_by_newline[$i], true);

			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo $json_decoded_text['userId'] . "\t";
			echo $json_decoded_text['password'] . "\t";
			echo $json_decoded_text['name'] . "\t";
		}
	?>

</body>
</html>