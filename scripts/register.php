<?php include('../include_files/db_connect.inc'); //INCLUDE DB CONNECT FILE ?>

    <link rel="stylesheet" type="text/css" href="../style.css" />
<?php
 
//INSERTING DATA FROM THE REGISTRATION FORM INTO THE DATABASE
try {
	
	$password = $_POST['password'];
	$confirm_password = $_POST['cpassword'];
	
	if ($password != $confirm_password) {
		echo "<h2>Passwords do not match</h2>";
		header( "refresh:3; url=../index.php" ); 	//REDIRECT TO HOMEPAGE AFTER SUCCESSFUL REGISTRATION
	} else {

    $value1 = htmlspecialchars( $_POST['firstname'] );  //PREVENTING xSS ATTACK BY USING HTML SPECIAL CHARACTERS
    $value2 = htmlspecialchars( $_POST['lastname'] );
    $value3 = htmlspecialchars( $_POST['email'] );
    $value4 = htmlspecialchars( $_POST['password'] );  //HASHING PASSWORD AS IT IS ENTERED INTO THE DATABASE USING 'CRYPT'
    $value5 = htmlspecialchars( $_POST['postcode'] );


	$value4 = password_hash($value4, PASSWORD_DEFAULT);
	
    $result = $conn->prepare( "INSERT INTO users (firstname, lastname, email, password, postcode, created_at, updated_at) VALUES (:firstname, :lastname, :email, :password, :postcode, :created_at, :updated_at)" );
    $result->bindParam( ':firstname', $value1 );
    $result->bindParam( ':lastname', $value2 );
    $result->bindParam( ':email', $value3 );
    $result->bindParam( ':password', $value4 );
    $result->bindParam( ':postcode', $value5 );
	$result->bindParam( ':created_at', time());
	$result->bindParam( ':updated_at', time());





    $result->execute();
    echo "<h2>Thank you for Registering, you will now be redirected to the homepage...</h2>";
    header( "refresh:3; url=../mylogin.php" ); 	//REDIRECT TO HOMEPAGE AFTER SUCCESSFUL REGISTRATION
	}
} catch ( PDOException $e ) {    	//ECHO MESSAGE IF USERNAME IS ALREADY IN USE
    if ( $e->getCode() == 23000 ) {
        echo "<h2>The username entered is already in use...</h2>";
        header( "refresh:3; url=../index.php" ); 		//REDIRECT BACK TO REGISTRATION PAGE
    }

}

?>