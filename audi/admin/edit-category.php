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

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $category = getByID("categories", $id);

                if (mysqli_num_rows($category) > 0) {

                    $data = mysqli_fetch_array($category);
            ?>
                    <div class="card">

                    <?php include('message.php'); ?>

                        <div class="card-header">
                            <h4>Edit cartegory</h4>
                        </div>

                        <div class="card-body">

                            <form action="code-cartegory.php" method="POST" enctype="multipart/form-data">

                                <div class="row">

                                    <div class="col-md-6">

                                        <input type="hidden" name="category_id" value = "<?= $data['id'] ?>">

                                        <label for="">Name</label>
                                        <input requred type="text" name="name" value = "<?= $data['name'] ?>" placeholder="enter cartegory name" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="">Slug</label>
                                        <input requred type="text" name="slug" value = "<?= $data['slug'] ?>" placeholder="enter slug" class="form-control">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Description</label>
                                        <textarea name="description" cols="4" rows="3" placeholder="enter description" class="form-control"><?= $data['description'] ?></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Upload image</label>
                                        <input type="file" name="image" class="form-control">
                                        <label for="">current image</label>

                                            <input type="hidden" name="old_image" value="<?= $data['image'] ?>">

                                        <img src="../uploads/<?= $data['image'] ?>" height= "50px" width="50px" alt="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Meta title</label>
                                        <input requred type="text" name="meta_title" value = "<?= $data['meta_title'] ?>" placeholder="enter meta title" class="form-control">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Meta Description</label>
                                        <textarea name="meta_description" cols="4" rows="3" placeholder="enter meta description" class="form-control"><?= $data['meta_description'] ?></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Meta Keywords</label>
                                        <textarea name="meta_keywords" cols="4" rows="3" placeholder="enter meta keywords" class="form-control"><?= $data['meta_keywords'] ?></textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="">Status</label>
                                        <input requred type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="">Popular</label>
                                        <input requred type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="update_cartegory_btn">Update</button>
                                    </div>


                                </div>

                            </form>

                        </div>
                    </div>

            <?php
                } else {
                    echo  "category not found";
                }
            } else {
                echo "id missing from url";
            }
            ?>


        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>