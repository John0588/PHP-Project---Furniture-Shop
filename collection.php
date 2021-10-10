<?php include './includes/head.php'; ?>
<?php include './includes/header.php'; ?>
<?php include './includes/db.php'; ?>
<?php include './includes/collectionSecurity.php'; ?>


<main>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 mt-5">
                <form id="" action="./manage_cart.php" method="post">
                    <div class="card">
                        <img src="./rsc/images/Dining-Room.jpg" class="card-img-top" name="images">
                        <div class="card-body text-center">
                            <h5 class="card-title" name="product_name">Dining Room Set</h5>
                            <p class="card-text" name="price">Price: <small><s class="text-secondary"> $950</s></small> $800</p>
                            <button type='submit' name='Add_To_Cart' class='btn btn-info'>Add To Cart</button>
                            <input type='hidden' name='Item_Name' value='Dining_Room'>
                            <input type='hidden' name='Price' value='800'>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 mt-5">
                <form action="./manage_cart.php" method="post">
                    <div class="card">
                        <img src="./rsc/images/Sectionals.jpg" class="card-img-top" name="images">
                        <div class="card-body text-center">
                            <h5 class="card-title" name="product_name">Sofas</h5>
                            <p class="card-text" name="price">Price: <small><s class="text-secondary"> $900 </s></small>$1,500</p>
                            <button type='submit' name='Add_To_Cart' class='btn btn-info'>Add To Cart</button>
                            <input type='hidden' name='Item_Name' value='Sofas'>
                            <input type='hidden' name='Price' value='1500'>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 mt-5">
                <form action="./manage_cart.php" method="post">
                    <div class="card">
                        <img src="./rsc/images/Console.jpg" class="card-img-top" name="images">
                        <div class="card-body text-center">
                            <h5 class="card-title" name="product_name">Console</h5>
                            <p class="card-text" name="price">Price: $500</p>
                            <button type='submit' name='Add_To_Cart' class='btn btn-info'>Add To Cart</button>
                            <input type='hidden' name='Item_Name' value='Console'>
                            <input type='hidden' name='Price' value='500'>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 mt-5">
                <form action="./manage_cart.php" method="post">
                    <div class="card">
                        <img src="./rsc/images/Bedroom-Furniture.jpg" class="card-img-top" name="images">
                        <div class="card-body text-center">
                            <h5 class="card-title" name="product_name">Bedroom Furniture</h5>
                            <p class="card-text" name="price">Price: $1200</p>
                            <button type='submit' name='Add_To_Cart' class='btn btn-info'>Add To Cart</button>
                            <input type='hidden' name='Item_Name' value='Bedroom_Furniture'>
                            <input type='hidden' name='Price' value='1200'>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<br>
<br>
<br>
<?php include './includes/footer.php'; ?>