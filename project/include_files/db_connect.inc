<?php // PHP INCLUDE FILE TO CONNECT TO THE MySQL DATABASE ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_test";

// TRY TO CONNECT TO THE DATABASE IF FAILS ECHO "Connection failed:" AND DISPLAY ERROR MESSAGE

try {
    $conn = new PDO("mysql:host=$servername;dbname=assignment_test", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ""; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>