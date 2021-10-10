<?php 

// Create Connection

$server = "localhost";
$user = "root";
$pass = "";
$db = "finalprojectinphp";
$con = new mysqli($server, $user, $pass, $db);
            
// Check the connection

if ($con -> connect_error) {
        die("Connection Error:" . $con->connect_error); 
    }

?>