<?php 
include './includes/head.php';
include './includes/header.php';
session_start();
?>
<main>

    <div class="container">
        <div class="row">

            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody class="text-center">

                        <?php
                        $total=0;
                        if(isset($_SESSION['cart'])) {
                        foreach($_SESSION['cart'] as $key => $value) {

                                $sr = $key + 1;
                                $total = $total + $value['Price'];
                                echo "
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Price]</td>
                                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                        <td>
                                            <form action='./manage_cart.php' method='post'>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                        ?>           
                    </tbody>
                </table>
            </div>
                        
            <div class="clo-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">Cash On Delivery</label>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>
<br>
<br>
<?php include './includes/footer.php'; ?>
