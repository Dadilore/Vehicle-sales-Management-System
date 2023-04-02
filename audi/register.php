<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message']="you are aleady registered";
    header("Location: index.php");
    exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Registration from</h4>
                    </div>
                    <div class="card-body">

                        <form action="registercode.php" method="POST" autocomplete="off">

                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">User name</label>
                                <input required type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="enter your user name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input required type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input required type="password" class="form-control" name="password" placeholder="enter your password">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input required type="password" class="form-control" name="cpassword" placeholder="confirm password">
                            </div>
                            <div>
                                <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                            </div>

                            already have an account? <a href="login.php">login</a>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>