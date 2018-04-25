<!DOCTYPE html>



<html>
<head>
	<?php include ('login_session.inc'); //INCLUDING LOGIN SESSION FILE TO DETET IF USER IS LOGGED IN ?>
	<?php include ('db_connect.inc');  //INCLUDING DB CONNECT FILE TO CONNECT TO THE DATABASE ?>
	<script type="text/javascript" src="form.js"/>//</script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./haha/local.css" />
        <link rel="stylesheet" type="text/css" href="./haha/login.css" />

</head>



	      
		<?php
	// IF STATEMENT OF SEE IF USER IS LOGGED IN
	// IF USER IS NOT LOGGED IN ECHO MESSAGE AND DISPLAY 2x BUTTONS 'Login' AND 'Register'
    
	$title = empty($passed_title) ? 'Sign In' : $passed_title;
	 
	if (!isset($_SESSION['email'])){
		echo "You are not currently logged in!";
		echo "<div id='cssmenu'>
               <ul>
                 <li><a href='#'>Home</a> </li>
                 <li><a href='#'>About</a> 
                   <ul>
                     <li><a href='#'>About us</a> </li>
                     <li><a  href='#'>our staff</a> </li>
                 </ul>
                 <li><a href='#'>Lesson</a>
                 <ul>
                     <li><a href='#'>Voice</a> </li>
                     <li><a  href='#'>Guitar</a> </li>
                     <li><a href='#'>Piano</a> </li>
                     <li><a  href='#'>Cello</a> </li>
                     <li><a  href='#'>Percussion</a> </li>
                 </ul>
                 </li>
                 <li><a href='#'>Student</a>
                 <ul>
                  <li><a href='mylogin.php'>Login</a> </li>
                  <li><a href='#'>Register</a> </li>
                  </ul>                 
                  </li>
                  <li><a  href='#'>Teacher</a>
                  <ul>
                  <li><a href='#'>Login</a> </li>
                  <li><a href='#'>Apply for job</a> </li>
                  </ul> 
                  </li>
                  <li><a href='#'>Management</a> </li>
                  <li><a href='#'>Contact us</a> </li>
               </ul>
              </div>";
               
		
	}
	else {    // IF USER IS LOGGED IN ECHO 'HELLO' THEN ECHO THEIR USERNAME AND DISPALY A 'Logout' BUTTON
		echo "Hello" . "\t" .$_SESSION['email'];
		echo " <div id='header'>
		
		                <h1>Sign in</h1>
	              	<div id='menu' style='float:right'>
							 
							<a href='mysearch.php'>search
								</a>
							<a href='index.php'>register
								</a>
							<a href='./scripts/log_out_query.php'>Logout
								</a>
							
							 </div>        			
						</div>";
	}
?>     





	