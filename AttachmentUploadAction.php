<!DOCTYPE html>
<html>
<head>
	<title>Attachment Upload Acknowledgement</title>
</head>
<body>

	<h1>Attachment Upload Acknowledgement</h1>

	<?php
		
		$uploads_dir = 'uploads';
		$source = $_FILES['fileUpload']['tmp_name'];
		$file_size = $_FILES['fileUpload']['size'];
		$file_type = $_FILES['fileUpload']['type'];
        $file_name = basename($_FILES['fileUpload']['name']);
		// move_uploaded_file(source, destination);        
        // move_uploaded_file($source, $uploads_dir . "/" . $file_name);

        move_uploaded_file($source, $uploads_dir . "/" . "u01.png"); 
        echo "Succesfully Saved!";
	?>

</body>
</html>