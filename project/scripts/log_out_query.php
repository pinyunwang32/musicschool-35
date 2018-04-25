<?php
	// DESTROY SESSION WHEN USERS CLICKS THE LOGOUT BUTTON
	session_start();
	session_destroy();

	// REDIRECT BACK TO HOMEPAGE AFTER USER HAS LOGGED OUT
	header('location:../index.php'); 	
?>