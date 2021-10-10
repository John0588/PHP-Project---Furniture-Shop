<?php include './includes/head.php'; ?>
<?php include './includes/header.php'; ?>
<?php session_start(); ?>
<main>

        <form class="sign_in" action="./index.php" method="post">
            <div class="container"><br><br>
            <h1 style="color: white">
            <?php

                

                if (isset($_SESSION["notAccepted2"]) && !isset($_SESSION["email"])) {
                echo $_SESSION["notAccepted2"];
                session_unset();
                }

                if (isset($_SESSION["notAccepted3"]) && !isset($_SESSION["email"])) {
                echo $_SESSION["notAccepted3"];
                session_unset(); 
                }

                if (isset($_SESSION["notAccepted4"]) && !isset($_SESSION["email"])) {
                echo $_SESSION["notAccepted4"];
                session_unset(); 
                }

                if (isset($_SESSION["notAccepted5"]) && !isset($_SESSION["email"])) {
                echo $_SESSION["notAccepted5"];
                session_unset(); 
                }

                if (isset($_SESSION["signUpError"])){
                echo $_SESSION["signUpError"];
                session_unset(); 
                }
            ?>
            </h1>

        <div class="row">
            <div class="col-sm-3">
                <p>Please Fill up the form.</p>
                <p>First Name: <input id="firstname" class="form-control" type="text" name="firstName" placeholder="firstName" required></p>

                <p>Last Name: <input id="lastname" class="form-control" type="text" name="lastName" placeholder="lastName" required></p>

                <p>Email: <input id="email" class="form-control" type="text" name="email" placeholder="email" required></p>

                <p>Phone Number: <input id="phonenumber" class="form-control" type="text" name="phoneNumber" placeholder="phoneNumber" required></p>

                <p>Password: <input id="password" class="form-control" type="text" name="password" placeholder="password" required></p>

                <hr class="mb-3">
                <input class="btn btn-warning" id="register" type="submit" name="signup" value="Sign Up">
                <a href="./signin.php">Already have an Account</a>
            </div>
        </div>   
    </form>
</main>
    
<?php include './includes/footer.php'; ?>