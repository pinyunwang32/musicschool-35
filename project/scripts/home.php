<?php include('../include_files/db_connect.inc'); //INCLUDE DB CONNECT FILE?>

<!DOCTYPE html>
<html>
	<body>
	 
	<?php    // QUERY THE DATABASE TO SEE IF A USER EXISTS
		session_start();
		if (!isset($_SESSION['id'])){
		header('location:login.php');
		}
		
		$session_id = $_SESSION['id'];
		$sth = $conn->prepare("select * from members where username = :session");
		$sth->bindParam(':session', $session_id);
		$user_row = $sth->fetch();
		$sth->execute();
		header('Location: ../index.php');    
	?>

	</body>
</html>