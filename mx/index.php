<?php
	// Starting session
	session_start(); 
	
?>

<!doctype html>
<html>
<head>
<?php
	// Sets the title to Home
    $title = 'Home';
	
	// Includes the head.php which functions as a simple navigation
    include('include/head.php');
?>
</head>

<body>


<?php

	// Checks if the user is logged in - if the user is logged in, the content below is shown
	// See https://stackoverflow.com/questions/9001702/php-session-destroy-on-log-out-button/14997573
	if (! empty($_SESSION['user'])) 
	{

?>

<?php 
	// Includes the toparea with the site headline, buttons etc.
	include('include/toparea.php');
?>

<div class="container">
  
    <!-- Form used to write new notes -->
    <div class="col-5 col-m-5 col-s-12 form-area">
        <form action="index.php" method="post">
            <label for="subject"><b>Subject:</b></label><br/> 
            <input type="text" name="subject"><br/><br/>
            <label for="note"><b>Note:</b></label><br/> 
            <textarea name="note" rows="10" cols="10" wrap="hard"></textarea><br/>
            <input type="submit" id="add" value="Add new note">
        </form>
    </div> <!-- end of form-area -->
    
    <div class="col-5 col-m-5 col-s-12 note-area"> 
    
        <div class="button-area">
           
           <input type="button" class="input-button" id="red-button" value="Delete note"> 
            
        </div> <!-- end of button-area -->
    
  
        
        <?php include('include/form.php'); ?>
        
        <!-- Sets session variable -->
        <?php
            
            // When the subject and note is submitted from the form, I put each value inside session variables
            $subject = $_POST['subject'];
            $note = $_POST['note'];
        
            $_SESSION['subject'] = $subject; 
            $_SESSION['note'] = $note; 
            
            // echo $subject;
            // echo $note;
        ?>

	     
    </div> <!-- end of note-area -->
    
    <div class="col-12 col-m-12 note-preview-area"> 
    
    	<div class="post-it-preview">
        
        	<h3 class="subject">Far Cry 5</h3><br/>
            The game is really cool. <br/>
            You should all check it out!<br/>
            BRB gotta play!
        
        </div>
        
        <div class="post-it-preview">
        
        	<h3 class="subject">Hey everyone</h3><br/>
            I've been reading the other notes here<br/>
            and I really think it's nice to be able to<br/>
            post notes.<br/>
            I just made a delicious bananabread!
        
        </div>
        
        <div class="post-it-preview">
        
        	<h3 class="subject">Death Stranding</h3><br/>
            Wow I have to tell you that I'm so excited about this game in particular. Hideo Kojima is the best! 
        
        </div>
        
        <div class="post-it-preview">
        
        	<h3 class="subject">Looking for a game</h3><br/>
            I just want to remind myself that I'm looking for a specific game, which doesn't require too much, so I can play while listening to streams or podcasts.
        
        </div>
    	
    
    </div>
    
    <?php 
    
        }
        
        // If the user is not logged in, a message is displayed telling the user that he/she should go to login.php to log in
        else {
			
			echo "<div id='error'><b>Oops!</b> You are not logged in. Please log in.</div>";
			
			// Includes the toparea with the site headline, buttons etc.
			include('include/toparea.php');
            
            echo 'Please click on the button below to go to the login page.<br/><br/>
			<a href="login.php" class="button">Login here</a>';
            
        }
        
    ?>

</div> <!-- end container -->

</body> <!-- end of body -->

<script>

$(document).ready(function(){
	
	// When the erase button is clicked, then delete the latest post
	$(".note-area #red-button").click(function(){
					
			$(".post-it").hide();
		
		<?php 
			
			// Checks if the subject is set and if it is, it gets unset
			// From https://stackoverflow.com/questions/2231332/how-to-remove-a-variable-from-a-php-session-array	
			if (isset($_POST['subject'])) {
				
				unset($_SESSION['subject']);
			
			}    
		?>
			
	}); 

 

// When the "Add new note" button is clicked, then show the posted note
$("#add").click(function(){
	
	$(".post-it").show();
	
	});

});



</script>

</html>



<!-- 

1. If you skipped the back-end: Write an HTML page that displays a number of notes, buttons (e.g.: Add new, Erase, Login, Register, Logout), 
And a form which would be used to write a new note.
Try to achieve a layout that has good usability and is well structured. 
Use PHP to structure your code and at least try to store data (e.g login, content) in PHP sessions or JS objects / local storage.
2. Make sure your markup is HTML5 compliant
3. Style the UI to your taste with CSS or SASS/LESS
4. Enhance the interactive parts using animation (CSS or JS / jQuery)
5. Make the webpage responsive


-->