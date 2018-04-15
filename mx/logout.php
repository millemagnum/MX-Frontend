<?php 

	// Session start
	session_start();

?>

<!doctype html>
<html>
<head>
<?php
    $title = 'Logout';
	
	// Includes the head.php
    include('include/head.php');
?>
</head>

<body>

<?php 
	// Includes the toparea with the site headline, buttons etc.
	include('include/toparea.php');
?>

<!-- Took some inspiration from https://stackoverflow.com/questions/9001702/php-session-destroy-on-log-out-button/14997573 -->
<?php
	
	// Stops session
	session_destroy();
	
	// Informs the user
	echo 'You have been logged out. <br/><br/>
	<a href="login.php" class="button">Login again here</a>'; 
?>

</body>

</html>