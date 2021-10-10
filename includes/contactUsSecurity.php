<?php 
    session_start();
    if(!isset($_SESSION["email"])) {
        $_SESSION["notAccepted4"] = "You Need To Sign Up / Log In!";
        header("Location: ./signup.php");
    }

?>