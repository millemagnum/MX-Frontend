<div class="col-12 col-m-12 top-area">
    <div class="top-headline">
    
        <h2>Note taking webpage</h2>
    
    </div> <!-- end of top-headline -->
    

    <div class="top-buttons">
			<?php 
            
            // If the user is logged in - it shows the username at the top of the page
                if($_SESSION["user"] != "") { 
                
                    // If the user is logged in - shows the username
                     echo '<i>You are logged in as: ' . '<b>' . $_SESSION["user"] . '</b>' . '</i>';
                } else {
                    
                    // If the user is not logged in - shows this text
                    echo "You are not logged in";	
                }
            
            ?>
        <a href="login.php" class="top-button" id="login">Login</a>
        <a href="logout.php" id="red-button" class="top-button">Logout</a><br/><br/>
    </div> <!-- end top-buttons -->
    
    <img src="include/banner-custom.jpg" class="banner-img" width="100%" height="100%" alt="banner"/>
</div> <!-- end top-area -->