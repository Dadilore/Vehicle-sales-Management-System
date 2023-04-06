<?php
include('functions/myfunctions.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6>
            <a href="index.php">
                Home/
            </a>
            <a href="checkout.php">
                Checkout
            </a>
        </h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>Basic Details</h5>
                            <hr>
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Name</label>
                                    <input required type="text" name="name" placeholder="Enter your full name" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Email</label>
                                    <input required type="email" name="email" placeholder="Enter your email" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Phone</label>
                                    <input required type="number" name="number" placeholder="Enter your phone number" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="" class="fw-bold">Pin code</label>
                                    <input required type="text" name="pincode" placeholder="Enter your Pin code" class="form-control">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="" class="fw-bold">Address</label>
                                    <textarea required type="text" name="address" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h5>Order details</h5>
                            <hr>
                            <?php $items = getCartItems();
                            $totalPrice = 0;
                                foreach($items as $citem)
                                {
                                    ?>
                                        <div class="mb-1 border">
                                            <div class="row allign-items-center">
                                                <div class="col-md-2">
                                                    <img src="uploads/<?=$citem['image'] ?>" alt="Image" width="60px">
                                                </div>
                                                <div class="col-md-5">
                                                    <label for=""><?=$citem['name'] ?></label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for=""><?=$citem['selling_price'] ?></label>
                                                </div>

                                                <div class="col-md-2">
                                                    <label>x<?=$citem['prod_qty'] ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                }
                            ?>
                            <hr>
                            <h5>Total price : <span class="float-end fw-bold"><?= $totalPrice ?></span></h5>
                            <div class="">
                                <input type="hidden" name="payment_mode" value="COD">
                                <button type="submit" name="placeOrderBtn" class="btn btn-primary">Confirm and place order / COD</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<?php
include('includes/footer.php');
?>