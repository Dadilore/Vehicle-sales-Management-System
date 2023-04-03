<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/images/bg/bg.png)">       
    <div class="container d-flex flex-column align-items-start justify-content-center w-100 min-h-350px min-h-lg-500px px-9">
        <div class="text-left mb-5 mb-lg-10 py-10 py-lg-20">
            <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                Find your Dream Ride at<br>
                <span style="background: linear-gradient(to right, #056efa 0%, #fa9105 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                    <span>The Best Car Dealer</span>
                </span>
            </h1>
            <a href="categories.php" class="btn btn-secondary mt-4">Explore Brands</a>
        </div>  
    </div>
</div> 
    

<?php 
include('includes/footer.php');
?>