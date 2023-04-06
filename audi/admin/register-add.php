<?php
include('../config/dbcon.php');
include('authentication.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar-top.php');
?>

<div class="container-fluid px-4">
    <div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add User/Admin
                    <a href="view-register.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">

                <form action="code-users.php" method="POST">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name"  required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email"  required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Role as</label>
                            <select name="role_as" required class="form control" id="">
                                <option value="">Select role</option>
                                <option value="1" >Admin</option>
                                <option value="0">user</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" width="70px" height="70px" />
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" name="add_user" class="btn btn-primary">Add User/Admin</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>