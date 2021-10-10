<?php 
// Sign Up (These comes from my Sign Up form)
    // session_start();
    if(isset($_POST['signup'])) {

        $_SESSION["firstName"]      = trim(strtolower($_POST["firstName"]));
        $_SESSION["lastName"]       = trim(strtolower($_POST["lastName"]));
        $_SESSION["email"]          = trim(strtolower($_POST["email"]));
        $_SESSION["phoneNumber"]    = trim(strtolower($_POST["phoneNumber"]));
        $_SESSION["password"]       = md5($_POST["password"]);
        $_SESSION["signinDate"]     = date("Y-m-d");

        include './includes/db.php';

    $s_signup ="SELECT * FROM signup WHERE email = '{$_SESSION["email"]}'";
    $r_signup = $con -> query($s_signup);
    if ($r_signup -> num_rows > 0) {
        $_SESSION["signUpError"] = "This Email has already registered, please Sign In!";
        header("Location: ./signup.php");

    } else {

            $i_signup = "INSERT INTO signup (uid, firstName, lastName, email, phoneNumber, password, date ) 
            VALUES (null,
                    '{$_SESSION["firstName"]}',
                    '{$_SESSION["lastName"]}',
                    '{$_SESSION["email"]}',
                    '{$_SESSION["phoneNumber"]}',
                    '{$_SESSION["password"]}',
                    '{$_SESSION["signinDate"]}') ";

            if($con -> query($i_signup) === true) {
                echo"<script>
                 alert('Succesfully saved from sign up form.');
                 window.location. href='./signup.php';
                 </script>";

            }else {     
                echo"<script>
                 alert('Please try again, they have error while saving the data sign up database!');
                 window.location. href='./signup.php';
                 </script>";
            
            }
        }
        $con -> close(); 
} 
?>