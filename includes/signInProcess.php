<?php 
// Sign In (These comes from my Sign In form)
if(isset($_POST['signin'])) {
    $_SESSION["email"]       = trim(strtolower($_POST["email"]));
    $_SESSION["password"]       = md5($_POST["password"]);
    $_SESSION["signinDate"]  = date("Y-m-d");

    include './includes/db.php';

$s_signin ="SELECT * FROM signin WHERE email = '{$_SESSION["email"]}'";
$r_signin = $con -> query($s_signin);
    
    if ($r_signin -> num_rows > 0) {
            $_SESSION["signInError"] = "This email has not exist, please Sign Up!";
            header("Location: ./signin.php");
    } else {
            $i_signin = "INSERT INTO signin (uid, email, password, date) 
            VALUES (null,
            '{$_SESSION["email"]}',
            '{$_SESSION["password"]}',
            '{$_SESSION["signinDate"]}')";

if($con -> query($i_signin) === true) {
   
    echo"<script>
             alert('Succesfully saved from sign in form.');
             window.location. href='./signup.php';
             </script>";
}else {
     
    echo"<script>
             alert('Please try again, they have error while saving the data in sign in database!');
             window.location. href='./signup.php';
             </script>";
    }   
}
$con -> close(); 
}
?>