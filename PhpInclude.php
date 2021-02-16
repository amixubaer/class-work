<!DOCTYPE html>
<html>
<head>
	<title>PHP Include/Require</title>
</head>
<body>
	
	<!-- require = must, if fail you will get error
	include = necessary, if fail you will get warning -->
	
	<h1>PHP Include/Require</h1>

	<p>Lorem ipsum</p>
	<br>
	<p>Lorem ipsum</p>


	<?php require 'FooterText.php'; ?>

	<?php include 'FooterText.php'; ?>

</body>
</html>