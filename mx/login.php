<?php
    session_start();
	
	
	// Checks if the user is logged in via session
	 if (isset($_SESSION['user'])) {
		
		// if logged in - redirect to homepage
		// header("Location:index.php");
		
	} else {
		// If not logged in

	
		// Checking whether the user has clicked the login button - if the user has, it sets the session variables
		// Took a bit from Stackoverflow: https://stackoverflow.com/questions/10097887/using-sessions-session-variables-in-a-php-login-script
		if(isset($_POST['login']))  
		{
			 $username = $_POST['Username'];
			 $password = $_POST['Password'];
		
		// Sets session variable
		$_SESSION['user'] = $username; 
		
		// Works if session cookie was accepted
		echo $_SESSION['user'];
		
		// Directs the user to the homepage when the user is logged in successfully
		echo '<script type="text/javascript"> window.open("index.php","_self");</script>';
		
		} else {
			
			echo "<div id='error'><b>Oops!</b> You are not logged in. Please log in below.</div>";	
		
		}
	
	
	} // end of if statement
?>

<!doctype html>
<html>
<head>
<?php
    $title = 'Login';
	
	// Includes the head.php
    include('include/head.php');
?>
</head>
<body>

<?php 
	// Includes the toparea with the site headline, buttons etc.
	include('include/toparea.php');
?>

<?php
// Help from W3Schools: https://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete
// Empty value variables used for form validation
/*$usernameError = $passwordError = "";
$username1 = $password1 = "";

// 
function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  // Checks if the username field is empty and if it is, then it outputs an error message
  if (empty($_POST["Username"])) {
    $usernameError = "Username is required";
	
  } else {
	  
    $username1 = test_input($_POST["Username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $username1)) {
      $usernameError = "Username can only contain letters and whitespace"; 
    }
  }
  
   // Checks if the password field is empty - if it's empty then it outputs an error message
   
   if (empty($_POST["Password"])) {
    $password1 = "Password is required";
	
  } else {
	  
    $password1 = test_input($_POST["Password"]);
  }
  
  
  
} */  // end of if statement
  
  ?>

    <div class="col-12 col-m-12 login-area">
        <form action="" method="post">
            <label><b>Username:</b></label><br/>
            <input type="text" name="Username" value="<?php // echo $username1; ?>" /><!--<span class="errormessage">* <?php // echo $usernameError;?></span>--><br/>
            <label><b>Password:</b></label><br/>
            <input type="password" name="Password" <?php // echo $password1;?> /><!--<span class="errormessage">* <?php // echo $passwordError;?></span>--><br/>
            <input type="submit" name="login" value="Login"/>
        </form>
    </div>
    
    <?php 
	
	// If the user is logged in, the username is shown underneath the input fields
	//if (isset($_SESSION['user'])) {
    
 //	echo '<p>You are logged in as: ', $_SESSION['user']; 
		
	//} 
		?>
    
    </p>
    
    <a href="index.php" class="button" id="gohome-button">Go to Homepage</a>

    <?php
            //Inkludere script - bl.a. foundation, jquery m.f.
            // include("scripts.php");
    ?>

</body>
</html>
