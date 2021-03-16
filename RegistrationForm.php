<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
  </head>
  <body>

    <h1>Registration Form</h1>

    <?php
      $firstNameErr = $lastNameErr = $genderErr =  $emailErr = $userNameErr = $passwordErr = $rEmailErr = "" ;

      $firstName = ""; 
      $lastName = "";
      $gender = "";
      $email = "";
      $userName= "";
      $password= "";
      $rEmail= "";

      if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST['fname'])) {
          $firstNameErr = "Please fill up the first name properly";
        }
        else {
          $firstName = $_POST['fname'];
        }

        if(empty($_POST['lname'])) {
          $lastNameErr = "Please fill up the last name properly";
        }
        else {
          $lastName = $_POST['lname'];
        }

        if(empty($_POST['email'])) {
          $emailErr = "Please enter your email";
        }
        else {
          $email = $_POST['email'];

          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            { 
              $emailErr = "Invalid email format"; 
            }
        }

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

        if(empty($_POST['remail'])) {
        $rEmailErr = "Recovery Email is required";
        }
        else {
          $rEmail = $_POST['remail'];
        
             if (!filter_var($rEmail, FILTER_VALIDATE_EMAIL)) 
          { $rEmailErr = "Invalid recovery email format"; }
        }

        if (empty($_POST['gender'])) {
               $genderErr = "Gender is required"; 
        } 

        else { 
          $gender = $_POST['gender']; 
        }
        
      }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
      <fieldset>
        <legend>Basic Information: </legend>

        <label for="fname">FirstName:</label>
        <input type="text" name="fname" id="fname" value="<?php echo $firstName;?>">
        <br>
        <p style="color:red"><?php echo $firstNameErr; ?></p>

        <label for="lname">LastName:</label>
        <input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
        <br>
        <p style="color:red"><?php echo $lastNameErr; ?></p>

        <label for="gender">Choose Gender:</label>

        <input type="radio" name="gender" 
        <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male 

        <input type="radio" name="gender" 
        <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female 

        <input type="radio" name="gender" 
        <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
        <p style="color:red"><?php echo $genderErr; ?></p>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="...@gmail.com" value="<?php echo $email ?>">
        <br>
        <p style="color:red"><?php echo $emailErr; ?></p>

      </fieldset>
      <br>
     
      <fieldset>

        <legend>User Account Information: </legend>

        <label for="uname">UserName:</label>
        <input type="text" name="uname" id="uname" value="<?php echo $userName; ?>">
        <br>
        <p style="color:red"><?php echo $userNameErr; ?></p>

        <label for="pass">Password:</label>
        <input type="password" name="password" id="password" value="<?php echo $password; ?>">
        <br>
        <p style="color:red"><?php echo $passwordErr; ?></p>
        
        <label for="remail">Recovery Email Address:</label>
        <input type="email" name="remail" id="remail" placeholder="...@gmail.com" value="<?php echo $rEmail ?>">
        <br>
        <p style="color:red"><?php echo $rEmailErr; ?></p>

      </fieldset>
		<br>

		<input type="submit" value="Submit">

		</form>
		<br>

		<?php

		if($firstName != "" && $lastName != "" && $gender != "" && $email != "" && $userName != "" && $password != "" && $rEmail != "")
		{
	

			$File = "Users.txt";
			$Handle = fopen($File, 'a');				
		
			fwrite($Handle, $firstName); 
			fwrite($Handle, ",");
			fwrite($Handle, $lastName);
			fwrite($Handle, ",");
			fwrite($Handle, $gender);
			fwrite($Handle, ",");
			fwrite($Handle, $email);
			fwrite($Handle, ",");
			fwrite($Handle, $userName);
			fwrite($Handle, ",");
			fwrite($Handle, $password);
			fwrite($Handle, ",");
			fwrite($Handle, $rEmail);
			fwrite($Handle, "\n");
			
			fclose($Handle); 
		}

		$file = "Users.txt";
		$open = fopen($file, 'r');
		$read = fread($open, filesize($file));
		$line= (explode("\n", $read));

		fclose($open);
		
		?>

    

    </body>
</html>