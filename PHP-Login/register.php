<?php 

require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welocme to vishal</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>

	<?php 
        if(isset($_POST['register_button'])){
        	echo '
              <script>
              $(document).ready(function{
                $("#first").hide();
                $("#second").show();
              	});
              </script>
        	';
        }
	 ?>

	<div class="wrapper">

		<div class="login_box">
			<div class="login_header">
			  <h1>VISHAL</h1>
			  Login or Sign up below!
		    </div>


		    <div id="first">
		      <form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder="Email Address" value="<?php 
			        if(isset($_SESSION['log_email'])){
			        	echo $_SESSION['log_email'];
			        } 
					 ?>" required>
					<br>


					<input type="password" name="log_password" placeholder="Password">
					<br>
					<?php if(in_array("Email or Password was incorect<br>", $error_array)) echo "Email or Password was incorect<br>"; ?>

					<input type="submit" name="login_button" value="Login">
					<br>
					<a href="#" id="signup" class="signup"><h2>Need an account? Register here!</h2></a>
					
					
		      </form>
		    </div>


		    <div id="second">

		      <form action="register.php" method="POST">

					<input type="text" name="reg_fname" placeholder="First name" value="<?php
					if (isset($_SESSION['reg_fname'])) {
					 echo $_SESSION['reg_fname'];
					}
					 ?>" required>
			        <br>
					<?php if(in_array("your first name must be in between 2 to 25 characters<br>", $error_array)) echo "your first name must be in between 2 to 25 characters<br>"; ?>


					
					<input type="text" name="reg_lname" placeholder="Last name" value="<?php
					if (isset($_SESSION['reg_lname'])) {
					 echo $_SESSION['reg_lname'];
					}
					 ?>" required>
					<br>
					<?php if(in_array("your last name must be in between 2 to 25 characters<br>", $error_array)) echo "your last name must be in between 2 to 25 characters<br>"; ?>



					<input type="email" name="reg_email" placeholder="Email" value="<?php  
			        if(isset($_SESSION['reg_email'])){
			         echo $_SESSION['reg_email'];
			        }
					?>" required>
					<br>



					<input type="email" name="reg_email2" placeholder="Conform Email" value="<?php  
			        if(isset($_SESSION['reg_email2'])){
			         echo $_SESSION['reg_email2'];  
			         }
					?>" required>
					<br>
			        <?php if(in_array("Email alrady in use<br>", $error_array)) echo "Email alrady in use<br>";
					else if(in_array("invalid email formate<br>", $error_array)) echo "invalid email formate<br>";
					else if(in_array("Email does not match<br>", $error_array)) echo "Email does not match<br>"; ?>



					<input type="password" name="reg_password" placeholder="password" required>
					<br>


					<input type="password" name="reg_password2" placeholder="Conform password" required>
					<br>
					<?php if(in_array("your password do not match<br>", $error_array)) echo "your password do not match<br>";
					else if(in_array("Your password can only contain english alphabate and numbers<br>", $error_array)) echo "Your password can only contain english alphabate and numbers<br>";
					else if(in_array("Your password must be between 5 to 30 character<br>", $error_array)) echo "Your password must be between 5 to 30 character<br>"; ?>



					<input type="submit" name="register_button" value="Register">
					<br>
					<?php if(in_array("<span style='color: #14C800;'>You are all set! Goahead and login</span><br>", $error_array)) echo "<span style='color: #14C800;'>You are all set! Go ahead and login</span><br>"; ?>

					<a href="#" id="signin" class="signin"><h2>Already have an account? Sign in here!</h2></a>


		      </form>
		    </div>
	    </div>
	</div>

</body>
</html>