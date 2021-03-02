<!DOCTYPE html>
<html>
<head>
	<title>Json Object</title>
</head>
<body>

	<h1>Json Object</h1>

	<?php 

		$arr1 = array('userId' => 1, 'password' => '123', 'name' => 'abc');
		$json_encoded_text =  json_encode($arr1); 

		$file1 = fopen("data.txt", "w");
		fwrite($file1, $json_encoded_text);

		fclose($file1);

		$file2 = fopen("data.txt", "r");
		$read = fread($file2, filesize("data.txt"));
		fclose($file2);

		$json_decoded_text = json_decode($read, true);

		echo $json_decoded_text['userId'];
		echo "<br>";
		echo $json_decoded_text['password'];
		echo "<br>";
		echo $json_decoded_text['name'];
	?>

</body>
</html>