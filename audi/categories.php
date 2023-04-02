<?php
 session_start();
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
        <a class="text-white" href="categories.php">
            Available Car Collections</h6>
        </a>
</div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Car Collections</h2>
                <hr>
                <div class="row">
                    <?php
                    $categories = getAllActive("categories");

                    if (mysqli_num_rows($categories) > 0) 
                    {
                        foreach ($categories as $item) 
                        {
                            ?>
                                <div class="col-md-3 mb-2">
                                    <a href="products.php?category=<?= $item['slug']; ?>">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <img src="uploads/<?= $item['image']; ?>" alt="Brand Image" class="w-100 h-50">
                                                <h4 class="text-center"><?= $item['name']; ?></h4>
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
    </div>
</div>

<?php
include('includes/footer.php');
?>