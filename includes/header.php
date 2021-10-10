<?php session_start(); ?>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home"><img src="./rsc/images/Logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item" ><a class="nav-link" href="./index.php">HOME</a></li>
                    <li class="nav-item" ><a class="nav-link" href="./aboutus.php">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="./collection.php">COLLECTION</a></li>
                    <li class="nav-item" ><a class="nav-link" href="./contactus.php">CONTACT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="./signup.php">SIGN UP</a></li>
                    <li class="nav-item" ><a class="nav-link" href="./signin.php">SIGN IN</a></li>      
                </ul>

                <div>
                    <?php 
                            
                    $count=0;
                    if(isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }
                    ?>
                    <a href= "./myCart.php" class= "btn btn-outline-success"> My Cart (<?php echo $count; ?>)</a>
                    
                </div>

            </div>
        </div>
    </nav>
