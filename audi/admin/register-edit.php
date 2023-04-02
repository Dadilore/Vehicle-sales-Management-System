<?php
include('../config/dbcon.php');
include('authentication.php');
include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <h4>Dashboard</h4>
        </li>
    </ol>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h4>Edit user</h4></div>
            <div class="card-body">

            <?php 
            if(isset($_GET['id']))
            {
                $user_id = $_GET['id'];
                $users = "SELECT * FROM users WHERE id = '$user_id' ";
                $users_run = mysqli_query($con, $users);

                if(mysqli_num_rows($users_run) > 0)
                {
                    foreach($users_run as $user)
                    {
                        ?>
                            
                        

                <form action="code-users.php" method="POST">

                        <input type="hidden" name="user_id" value="<?=$user['id']?>">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?=$user['name']; ?>" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" value="<?=$user['email']; ?>" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password"  required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Role as</label>
                            <select name="role_as" required class="form control" id="">
                                <option value="">Select role</option>
                                <option value="1"  <?=$user['role_as'] == '1' ? 'selected':'' ?> >Admin</option>
                                <option value="0"  <?=$user['role_as'] == '0' ? 'selected':'' ?> >user</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox"  <?=$user['status'] == '1' ? 'checked':'' ?>  name="status" width="70px" height="70px" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="update_user" class="btn btn-primary">Update user</button>
                        </div>

                    </div>
                </form>
            <?php

                     }
                }
                else
                {
                    ?>
                        <h4>No record found</h4>
                    <?php
                }
            }
                
            ?>

            </div>
        </div>
    </div>
</div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>