<?php include './includes/head.php'; ?>
<?php include './includes/header.php'; ?>
<?php session_start(); ?>


<main class="sign_in">

    <div>
        <form id="sign_in" action="./index.php" method="post">
            <div class="container">
            <?php
                
                if (isset($_SESSION["signInError"])) {
                echo $_SESSION["signInError"];
            }
            ?>

        <div class="row">
            <div class="col-sm-3">
                <hr class="mb-3">

                <p>Email: <input id="email" class="form-control" type="text" name="email" placeholder="Email" required></p>

                <p>Password: <input id="password" class="form-control" type="text" name="password" placeholder="password" required></p>

                <hr class="mb-3">
                <input class="btn btn-warning" id="register" type="submit" name="signin" value="Sign In">
                <a href="./signin.php">Forgot your password?</a>
        </div>
    </div> <br>

    <!-- <a href="./index.php" class="btn btn-warning" >Sign Out</a> -->
</main>

<br>
<br>
    
<?php include './includes/footer.php'; ?>