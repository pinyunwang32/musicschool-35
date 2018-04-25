<?php 
	include('../include_files/db_connect.inc'); //INCLUDE DB CONNECT FILE
	
	$email = htmlspecialchars($_POST['email']) ; // USING HTMLSPECIAL CHARACTERS TO PREVENT XSS ATTACK
	$password = htmlspecialchars($_POST['password']);

	// QUERY THE DATABASE TO SEE IF USERS CREDENTIALS MATCH
	$query = $conn->prepare("Select * from users where email = :email ");
	$query->bindParam(':email', $email);
	$query->execute();
	$count = $query->rowCount();
	$row = $query->fetch();

	//authenticates against the hash
	if ($count > 0 && password_verify($password, $row['password'])){

		session_start();
		$_SESSION['email'] = $row['email'];

		header("refresh:0; url=../mysearch.php" );
		
	}	else {
		echo "<h2>Wrong credentials!</h2>";
		header( "refresh:3; url=../mylogin.php" ); 
	}
?>

<!-- IF FAILED TO LOGIN DISPLAY THE JAVASCRIPT MESSAGE BELOW THEN REDIRECT BACK TO LOGIN PAGE -->
<script>
	function showError() {
		alert("Login Failed. Check your email or Password, Or register for an account")
	}
</script>