<?php 
	// Starts the session
	session_start();
?>

<!-- Get the submission of the form -->
	<div class="info-text">
    	<!-- Showing the user's username -->
		<?php echo $_SESSION["user"]; ?> wrote the following note:<br/>
    </div>
        
        <!-- Post it -->
    	<div class="post-it">
        
        	<?php 
				// If no note has been posted, a default text is written where the note will be shown once it's posted/added
				if (!isset($_POST["subject"]) && !isset($_POST["note"])) {
					
					echo "<i><b>Waiting for you to write a note<span id='dots'></span></b></i>";	
					
				} 
				
				// else show the note data
				else 
				
				{
			
			?>
        
        	<!-- Shows the posted content which the user wrote -->
            <h3 class="subject"><?php echo $_POST["subject"]; ?></h3><br/>
            <?php echo $_POST["note"]; ?>
            
            <?php 
				} // end of if statement
			?>
		</div>
        
    
<script>

// Making dots appear after the sentence when the "sticky note" is left empty (for example when the homepage is visited for the first time, then 3 dots appear after the sentence and then disappear and appears again one at a time
// Taken from https://stackoverflow.com/questions/12996736/basic-jquery-animation-elipsis-three-dots-sequentially-appearing
var dots = 0;

$(document).ready(function() {
    setInterval (type, 600);
});

function type() {
    if(dots < 3) {
        $('#dots').append('.');
        dots++;
    } else {
        $('#dots').html('');
        dots = 0;
    }
} 

</script>