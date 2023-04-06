<?php
include('functions/myfunctions.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar-top.php');
include('message.php');

?>


<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <h4>Orders</h4>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>user</th>
                                <th>Tracking No</th>                               
                                <th>Price</th>
                                <th>Date</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                   $orders = getAllOrders();
                   if(mysqli_num_rows($orders)>0)
                   {
                    foreach($orders as $item){
                        ?>
                            <tr>
                                <td><?= $item['id']; ?></td>
                                <td><?= $item['name']; ?></td>
                                <td><?= $item['tracking_no']; ?></td>
                                <td><?= $item['total_price']; ?></td>
                                <td><?= $item['created_at']; ?></td>
                                
                            </tr>
                        <?php

                    }

                   }
                   else
                   {
                    ?>
                        <tr>
                            <td colspan="5">No Orders Yet</td>
                        </tr>

                    <?php
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