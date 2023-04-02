<?php
include('../config/dbcon.php');
include('authentication.php');
include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><h4>Dashboard</h4></li>
    </ol>

    <div class="col-md-12">

    <?php include('message.php'); ?>

        <div class="card">
            <div class="card-header"><h4>Registered user
                <a href="register-add.php" class="btn btn-primary float-end">Add User</a>
            </h4>                
        </div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $query = "SELECT * FROM users";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                    <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['name']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td>
                                            <?php
                                                if($row['role_as'] == '1')
                                                {
                                                    echo 'Admin';
                                                }
                                                elseif($row['role_as'] == '0')
                                                {
                                                    echo 'User';
                                                }
                                            ?>
                                        </td>
                                        <td><a href="register-edit.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a></td>

                                        <td>
                                            <form action="code-users.php" method="POST">
                                            <button type="submit" name="user_delete" value="<?=$row['id'];?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <tr>
                                    <td colspan="6">no record found</td>
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
include('includes/scripts.php');
?>