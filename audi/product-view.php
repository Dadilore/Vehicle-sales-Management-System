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
            ?> <div class="py-3 bg-primary">
            <div class="container">
                <a class="text-white fs-7 fw-regular m-0" href="index.php">
                    Home
                </a>
                <span class="h-20px border-white border-start mx-2"></span>
                <a class="text-white fs-7 fw-regular m-0" href="categories.php">
                    Collections
                </a>
                <span class="h-20px border-white border-start mx-2"></span>                            
                <a class="text-secondary fs-7 fw-regular m-0"><?= $product['name']; ?></a>
            </div>
        </div>

                <div class="bg-light py-4 mt-5">
                    <div class="container mt-3" id="product_data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="shadow">
                                    <img src="uploads/<?= $product['image'] ?>" alt="vehicle image" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <?php if($product['trending']);{?>
                                    <span class="badge badge-light-secondary mb-2">Trending</span>
                                <?php } ?>
                                
                                <h4 class="fw-bold"><?= $product['name']; ?>
                                <span class="float-end text-danger"> </span>
                                </h4>
                                <hr class="my-2">
                                <p class="text-muted fs-7"><?= $product['small_description'] ?></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>KES <span class="text-primary fw-bold"> <?= $product['selling_price'] ?></span><s class="text-danger fs-6 ms-2 opacity-50"><?= $product['original_price'] ?></s></h4>
                                        
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="Quantity">Quantity</label>
                                                <div class="input-group mb-3" style="width: 130px;">
                                                    <button class="input-group-text"  id="decrement-btn">-</button>
                                                    <input type="text" class="form-control text-center bg-white" id="input-qty" value="1" disabled>
                                                    <button class="input-group-text" id="increment-btn">+</button>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-secondary px-4" id="addToCartBtn" value="<?= $product['id'] ?>"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button> 
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card border-0 shadow">
                                    <div class="card-body px-10 py-10">
                                        <h6>Vehice Description</h6>
                                        <p class="m-0"><?= $product['description'] ?></p>
                                    </div>
                                </div>
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
        
    <?php
?> 
