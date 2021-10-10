<?php 
include './includes/head.php'; 
include './includes/header.php'; 
include './includes/signupProcess.php'; 
include './includes/signInProcess.php'; 
include './includes/cartProcess.php'; 
?>

<main>
    <section class="Home">
        <div class="row">
            <div class="content col-lg-6 col-md-6 col-sm-12" style="margin-top: 7rem"><br> <br> <br>
                <center><h1>Home Furniture</h1><center>
                <center><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>Et debitis nobis numquam doloremque quos nulla.</p><center>
            
                <div>
                    <a href="./signin.php" class="btn btn-dark" >Sign In</a>
                    <a href="./signin.php" class="btn btn-warning text-dark" >Sign Out</a>
                </div>
            </div>
            <br>
            <br>
        <div class="image_area col-lg-6 col-md-6 col-sm-12 col-12 justify-content-center" style="relative: absolute; bottom:0px; right:1rem"><br> <br> <br>
        <img src="./rsc/images/Home-Image.jpg">
        </div>
    </section>
</main>
<br>
<br>

<?php include './includes/footer.php'; ?>
