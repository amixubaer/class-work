<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
  </head>
  <body>
  	<center>

	    <h1>Login</h1>

	    <?php
			$userNameErr = $passwordErr = "" ;

			$userName = "";
			$password = "";
			$msg = "";
			$flag = 0;

			$filepath = "Users.txt";
			$file = fopen($filepath,'r')
			or die("unable to open file");

			if($_SERVER["REQUEST_METHOD"] == "POST") 
			{

				if(empty($_POST['uname'])) {
				  $userNameErr = "Please fill up the username properly";
				  }
				else {
				  $userName = $_POST['uname'];
				}

				if(empty($_POST['password'])) {
				  $passwordErr = "Please fill up the password properly";
				}
				else {
				  $password = $_POST['password'];
				}

				while($line = fgets($file))
				{


	                $json_decoded_text = json_decode($line, true);

	                $userNameV= $json_decoded_text['userName'];
	                $passwordV= $json_decoded_text['password'];
	        
	                if($userNameV == $userName && $passwordV == $password)
	                {
	                    $flag++;
	                    break;
	                }       
            	}

            	if ($flag>0)
	            {
	                $msg = "Logged in";
	                echo "<br>";
	                echo $msg;
	                echo "<br>";
	                echo "Username and Password is Stored by Session";
	        		echo "<br>";

	        		
	                $_SESSION['userNameV'] = $userName;
	                $_SESSION['passwordV'] = $password;
	            
	                echo "UserName: " . $_SESSION['userNameV'];
	                echo "<br>";
	                echo "Password is: " . $_SESSION['passwordV'];
	                echo "<br>";
	                
	            }
	        
	            else
	            {
	                $msg = "Username Or Password Error!! Try Again.";
	                echo $msg;
	            }

	        }

	        session_unset();
		    session_destroy();
		    fclose($file);

	    ?>

	    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
	    	
			<fieldset style="width: 30%; margin: auto ;">
	        <legend>Login </legend>

	        <label for="uname">UserName:</label>
	        <input type="text" name="uname" id="uname" value="<?php echo $userName; ?>">
	        <br>
	        <p style="color:red"><?php echo $userNameErr; ?></p>

	        <label for="pass">Password:</label>
	        <input type="password" name="password" id="password" value="<?php echo $password; ?>">
	        <br>
	        <p style="color:red"><?php echo $passwordErr; ?></p>
	       

			</fieldset>
			<br>

			<input type="submit" value="Login">
			<a href="jsonRegistration.php" title="">Not yet registered?</a>

	    </form>

      </center>
    </body>
</html>