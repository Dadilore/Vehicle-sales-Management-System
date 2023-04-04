<?php
include('functions/myfunctions.php');
include('includes/header.php');
include('includes/navbar.php');


?>

<div class="py-3 bg-primary">
    <div class="container">
        <a class="text-white fs-7 fw-regular m-0" href="index.php">
            Home
        </a>
        <span class="h-20px border-white border-start mx-2"></span>
        <a class="text-white fs-7 fw-regular m-0">
            Collections
        </a>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2>Top-of-the-line Brands</h2>
                <hr>
            </div>
        </div>
        <div class="row my-4">
            <?php
            $categories = getAllActive("categories");

            if (mysqli_num_rows($categories) > 0) 
            {
                foreach ($categories as $item) 
                {
                    ?>
                        <div class="col-md-2 mb-2">
                            <a href="products.php?category=<?= $item['slug']; ?>">
                                <div class="card shadow collection-box">
                                    <div class="card-body collection">
                                        <img src="uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" class="thumbnail">
                                        <h4 class="text-center name"><?= $item['name']; ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>                               
                    <?php
                }
            }
            else 
            {
                echo "there are no available brands";
            }
            ?>
        </div>
            
    </div>
</div>

<?php
include('includes/footer.php');
?>