<?php
    session_start();
    include('includes/header.php');
    include('includes/navbar.php');
    include('functions/myfunctions.php');

    if (isset($_GET['product'])) 
    {
        $product_slug = $_GET['product'];
        $product_data =  getSlugActive("products", $product_slug);
        $product = mysqli_fetch_array($product_data);

        if($product)
        {
            ?> 
            <div class="py-3 bg-danger">
                        <div class="container">
                            <h6 class="text-white">
                                <a class="text-white" href="index.php">
                                    Home/
                                </a>
                                <a class="text-white" href="categories.php">
                                    Available Car Collections/
                                </a>
                                <?= $product['name']; ?>
                            </h6>
                        </div>
            </div>

                <div class="bg-light py-4">
                    <div class="container product_data mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="shadow">
                                    <img src="uploads/<?= $product['image'] ?>" alt="vehicle image" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4 class="fw-bold"><?= $product['name']; ?>
                                <span class="float-end text-danger"><?php if($product['trending']);{echo "Trending"; } ?> </span>
                                </h4>
                                <hr>
                                <h6><?= $product['small_description'] ?></h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Ksh <span class="text-success fw-bold"> <?= $product['selling_price'] ?></span></h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Ksh <s class="text-danger"><?= $product['original_price'] ?></s></h5>
                                     </div>                            
                                </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="Quantity">Quantity</label>
                                            <div class="input-group mb-3" style="width: 130px;">
                                                <button class="input-group-text  decrement-btn">-</button>
                                                <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                                                <button class="input-group-text increment-btn">+</button>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary px-4 addToCartBtn" value="<?= $product['id'] ?>"><i class="fa fa-shopping-cart me-2">Add to cart</i></button>
                                        </div>
                                    </div>

                                <hr>
                                <h6>Vehice Description</h6>
                                <p><?= $product['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        else 
        {
            echo "Vehicle not found";
        }
    } 
    else 
    {
        echo "something went wrong";
    }
    include('includes/footer.php');

    ?>   
        <script>
        
        </script>
    <?php
?> 
