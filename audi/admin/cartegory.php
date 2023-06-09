<?php
include('../config/dbcon.php');
include('authentication.php');
include('includes/header.php');
include('functions/myfunctions.php');
include('includes/sidebar.php');
include('includes/navbar-top.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <?php include('message.php'); ?>
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $category = getAll("categories");

                            if (mysqli_num_rows($category) > 0) {
                                foreach($category as $item) {
                            ?>
                                    <tr>
                                        <td><?=$item['id']; ?></td>
                                        <td><?=$item['name']; ?></td>
                                        <td>
                                            <img src="../uploads/<?=$item['image']; ?>" width="50px" height="50px" alt="<?=$item['name']; ?>">
                                        </td>

                                        <td>
                                            <?=$item['status'] =='0' ? "visible":"Hidden"; ?>
                                        </td>
                                        <td>
                                            <a href="edit-category.php?id=<?=$item['id']; ?>" class="btn btn-primary">Edit</a>

                                            <form action="code-cartegory.php" method="POST">
                                                <input type="hidden" name="category_id" value="<?=$item['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="delete_category_btn">Delete</button>
                                            </form>

                                        </td>
                                        
                                    </tr>
                            <?php
                                }
                            }
                             else
                              {
                                echo "No record found";
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
include('includes/scripts.php');

?>