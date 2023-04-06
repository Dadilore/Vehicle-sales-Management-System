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
                    if(isset($_GET['id']))
                    {

                        $id = $_GET['id'];

                        $product = getByID("products",$id);

                        if(mysqli_num_rows($product) > 0)
                        { 
                            $data = mysqli_fetch_array($product);

                            ?>
                                <div class="card">

                                <?php include('message.php'); ?>

                                    <div class="card-header">
                                        <h4>Edit Vehicle</h4>
                                    </div>

                                    <div class="card-body">

                                        <form action="code-cartegory.php" method="POST" enctype="multipart/form-data">

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <label for="">Select Category</label>
                                                    <select name="category_id" class="form-select mb-2" >
                                                        <option selected>Select category</option>

                                                        <?php
                                                            $categories = getAll("categories");
                                                            if(mysqli_num_rows($categories)>0)
                                                            {
                                                                foreach($categories as $item)
                                                                {
                                                                    ?>
                                                                        <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id']?'selected':'' ?> ><?= $item['name']; ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            else
                                                            {
                                                                echo "No category available";
                                                            }
                                                            
                                                        ?>
                                                        
                                                    </select>
                                                </div>

                                                <input type="hidden" name="product_id" value="<?= $data['id'] ?>">

                                                <div class="col-md-6">
                                                    <label class="mb-0">Name</label>
                                                    <input required type="text" name="name" value="<?= $data['name'] ?>" placeholder="enter  name" class="form-control mb-2">
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="mb-0">Slug</label>
                                                    <input required type="text" name="slug" value="<?= $data['slug'] ?>" placeholder="enter slug" class="form-control mb-2">
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <label class="mb-0">Small Description</label>
                                                    <textarea name="small_description"  cols="4" rows="3" placeholder="enter small description" class="form-control mb-2"> <?= $data['small_description'] ?></textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="mb-0">Description</label>
                                                    <textarea name="description"  cols="4" rows="3" placeholder="enter description" class="form-control mb-2"> <?= $data['description'] ?> </textarea>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="mb-0">Original Price</label>
                                                    <input required type="number" name="original_price" value="<?= $data['original_price'] ?>" placeholder="enter original price" class="form-control mb-2">
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="mb-0">Selling Price</label>
                                                    <input required type="number" value="<?= $data['selling_price'] ?>" name="selling_price" placeholder="enter selling price" class="form-control mb-2">
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="mb-0">Upload image</label>
                                                    <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                    <input type="file" name = "image"   class="form-control mb-2">
                                                    <label class="mb-0">current image</label>
                                                    <img src="../uploads/<?= $data['image'] ?>" alt="product image" height="50px" width="50px">
                                                </div>
                                                

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="mb-0">Quantity</label>
                                                        <input required type="number" value="<?= $data['qty'] ?>" name="qty" placeholder="enter quantity" class="form-control mb-2">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="mb-0">Status</label><br>
                                                        <input type="checkbox" <?= $data['status']=='0'?'':'checked' ?> name="status">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label class="mb-0">Trending</label><br>
                                                        <input  type="checkbox"  <?= $data['status']=='0'?'':'checked' ?> name="trending">
                                                </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="mb-0">Meta title</label>
                                                    <input required type="text" value="<?= $data['meta_title'] ?>" name = "meta_title" placeholder="enter meta title" class="form-control mb-2">
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <label class="mb-0">Meta Description</label>
                                                    <textarea name="meta_description"  cols="4" rows="3" placeholder="enter meta description" class="form-control mb-2"><?= $data['meta_description'] ?></textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="mb-0">Meta Keywords</label>
                                                    <textarea name="meta_keywords"  cols="4" rows="3" placeholder="enter meta keywords" class="form-control mb-2"><?= $data['meta_keywords'] ?></textarea>
                                                </div>

                                                
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                                                </div>


                                            </div>

                                        </form>

                                    </div>
                                </div>
                            <?php
                        }
                        else
                        {
                            echo "product not found for given id";
                        }

                    }               
                    else
                    {
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
