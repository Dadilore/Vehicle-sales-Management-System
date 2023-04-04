<?php
session_start();
include('functions/myfunctions.php');
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/images/bg/bg.png)">       
    <div class="container d-flex flex-column align-items-start justify-content-center w-100 min-h-350px min-h-lg-500px px-9">
        <!-- <div class="text-left mb-5 mb-lg-10 py-10 py-lg-20"> -->
                <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                    Find your Dream Ride at<br>
                        <span style="background: linear-gradient(to right, #056efa 0%, #fa9105 100%);               -webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                            <span>The Best Car Dealer</span>
                    </span>
                </h1>
                <a href="categories.php" class="btn btn-secondary mt-4">Explore Brands</a>
        </div>  
    </div>
</div> 
<div class="py-5" style="background-color:cream;">
    <div class="container">
        <div class="row">
            <h2>TRENDING</h2>
            <hr>
                <?php 
                $trendingProducts = getAllTrending();
                if(mysqli_num_rows($trendingProducts) > 0)
                {
                    foreach($trendingProducts as $item){
                        ?>
                            <div class="col-md-3 mb-2 mt-5">
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
                }
                ?>
        </div>
    </div>
</div>
<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h4 class="float-center text-white">Address</h4>
                <p class="text-white">
                    #24, Ground Floor
                    Nyawita street,
                    Maseno Kenya
                </p>
            <a href="tel:0743316661"><i class="fa fa-phone">+254 71111111</i></a>
            </div>
        </div>
    </div>
</div>


<?php 
include('includes/footer.php');
?>