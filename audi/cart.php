<?php
include('includes/header.php');
include('includes/navbar.php');
include('functions/myfunctions.php');

?>

<div class="py-3 bg-danger">
<div class="container">
    <h6 class="text-white">
        <a class="text-white" href="index.php">
            Home/
        </a>
        <a class="text-white" href="cart.php">
            Cart</h6>
        </a>
</div>
</div>    

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Best Car Dealer</h2>

                <?php $items = getCartItems(); 
                foreach($items as $citem){
                    echo $citem['name'];
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
include('includes/footer.php');
?>