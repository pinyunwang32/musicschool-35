<?php
	// IF STATEMENT OF SEE IF USER IS LOGGED IN
	// IF USER IS NOT LOGGED IN ECHO MESSAGE AND DISPLAY 2x BUTTONS 'Login' AND 'Register'

	session_start();
	if (!isset($_SESSION['id'])){
		
		
		
	}
	else {    // IF USER IS LOGGED IN ECHO 'HELLO' THEN ECHO THEIR USERNAME AND DISPALY A 'Logout' BUTTON
		echo "Hello" . "\t" .$_SESSION['id'];
		echo "<br/><a href='./scripts/log_out_query.php' class='top_buttons'>Logout</a>";
	}
?>
