<?php
include('functions/myfunctions.php');
include('includes/header.php');
include('includes/navbar.php');
include('message.php');



?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6>
            <a href="index.php">
                Home/
            </a>
            <a href="my-orders.php">
                My Orders
            </a>
        </h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tracking No</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                   $orders = getOrders();
                   if(mysqli_num_rows($orders)>0)
                   {
                    foreach($orders as $item)
                    {
                        ?>
                            <tr>
                                <td><?= $item['id']; ?></td>
                                <td><?= $item['tracking_no']; ?></td>
                                <td><?= $item['total_price']; ?></td>
                                <td><?= $item['created_at']; ?></td>
                                
                            </tr>
                        <?php

                    }
                    
                   }
                   else
                   {
                    echo "no orders yet";
                   }
                                                    
                    ?>
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
include('includes/footer.php');
?>