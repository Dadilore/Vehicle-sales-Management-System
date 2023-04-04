<?php
    session_start();
    include('includes/header.php');
    include('includes/navbar.php');
    include('functions/myfunctions.php');

    if (isset($_GET['category'])) 
    {

            $category_slug = $_GET['category'];
            $category_data =  getSlugActive("categories", $category_slug);
            $category = mysqli_fetch_array($category_data);

            if($category)
            {

           

                    $cid = $category['id'];
                ?>

                    <div class="py-3 bg-primary">
                        <div class="container">
                            <a class="text-white fs-7 fw-regular m-0" href="index.php">
                                Home
                            </a>
                            <span class="h-20px border-white border-start mx-2"></span>
                            <a class="text-white fs-7 fw-regular m-0" href="categories.php">
                                Collections
                            </a>
                            <span class="h-20px border-white border-start mx-2"></span>                            
                            <a class="text-secondary fs-7 fw-regular m-0"><?= $category['name']; ?></a>
                        </div>
                    </div>

                        <div class="bgi-no-repeat bgi-size-cover bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/images/bg/products.png)">       
                        <div class="container d-flex flex-column align-items-start justify-content-center w-100 min-h-100px px-9">
                            <div class="text-left my-10 py-10 py-lg-20">
                                <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                                    Find your Dream<br>
                                    <span style="background: linear-gradient(to right, #056efa 0%, #fa9105 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><?= $category['name']; ?>
                                    </span>
                                </h1>
                            </div>  
                        </div>
                    </div> 
                    <div class="py-3">
                        <div class="container">
                                    
                            <div class="row my-4">
                                <?php
                                    $products = getProdByCategory($cid);

                                    if (mysqli_num_rows($products) > 0) 
                                    {
                                                foreach ($products as $item) 
                                                {
                                                    ?>
                                                        <div class="col-md-3 mb-2">
                                                            <a href="product-view.php?product=<?= $item['slug']; ?>">
                                                                <div class="card shadow product-box">
                                                                    <div class="card-body product">
                                                                        <img src="uploads/<?= $item['image']; ?>" alt="Product Image" class="product-thumbnail">
                                                                        <h4 class="text-center name"><?= $item['name']; ?></h4>
                                                                        <p class="text-muted">KES <?= $item['selling_price']; ?></p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php
                                                }
                                    } else 
                                    {
                                        ?>
                                                <div class="alert bg-light-secondary d-flex flex-column flex-sm-row p-4">
                                                    <div class="d-flex flex-column text-dark pe-0 pe-sm-10">
                                                        <span>Oops...no products here yet. You can check back later</span>                                                    
                                                    </div>
                                                </div>
                                            <?php 
                                        }
                                ?>
                            </div>
                               
                        </div>
                    </div>

                <?php
            }
            else 
            {
                echo "something went wrong";
            }
    } 
    else 
    {
        echo "something went wrong";
    }
    include('includes/footer.php');
?>