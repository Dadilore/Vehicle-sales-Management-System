<?php

include('../config/dbcon.php');
include('authentication.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar-top.php');


?>

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="card">

            <?php include('message.php'); ?>

                <div class="card-header">
                    <h4>Add cartegory</h4>
                </div>

                <div class="card-body">

                <form action="code-cartegory.php" method="POST" enctype="multipart/form-data">

                    <div class="row">

                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input required type="text" name="name" placeholder="enter cartegory name" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="">Slug</label>
                            <input required type="text" name="slug" placeholder="enter slug" class="form-control">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="">Description</label>
                            <textarea name="description"  cols="4" rows="3" placeholder="enter description" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="">Upload image</label>
                            <input required type="file" name = "image"  class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta title</label>
                            <input required type="text" name = "meta_title" placeholder="enter meta title" class="form-control">
                        </div>
                        
                        <div class="col-md-12">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description"  cols="4" rows="3" placeholder="enter meta description" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta Keywords</label>
                            <textarea name="meta_keywords"  cols="4" rows="3" placeholder="enter meta keywords" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input  type="checkbox" name="status">
                        </div>

                        <div class="col-md-6">
                            <label for="">Popular</label>
                            <input type="checkbox" name="popular">
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="add_cartegory_btn">Save</button>
                        </div>


                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>
