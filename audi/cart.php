<?php
include('functions/myfunctions.php');
include('includes/header.php');
include('includes/navbar.php');


?>

<div class="py-5 ">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <h6> Product </h6>
                        </div>
                        <div class="col-md-3">
                            <h6>Price</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Quantity</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Remove</h6>
                        </div>
                    </div>
                    <div id="mycart">
                        <?php $items = getCartItems();

                        foreach ($items as $citem) {
                        ?>
                            <div class="card shadow-sm mb-3 product_data">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="uploads/<?= $citem['image']; ?>" alt="Image" width="80px">
                                    </div>
                                    <div class="col-md-3">
                                        <h5> <?= $citem['name']; ?> </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Ksh <?= $citem['selling_price']; ?> </h5>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="hidden" class="product_name" value="<?= $citem['prod_id']; ?>">
                                        <div class="input-group mb-3" style="width: 130px;">
                                            <button class="input-group-text updateQty decrement-btn">-</button>
                                            <input type="text" class="form-control text-center bg-white input-qty" value=" <?= $citem['prod_qty']; ?>" disabled>
                                            <button class="input-group-text updateQty increment-btn">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid']; ?>">
                                            <i class="fa fa-trash me-2"></i>Remove
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div>
                        </div>
                        <div class="float-end">
                            <a href="checkout.php" class="btn btn-primary float-end">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include('includes/footer.php');
        ?>