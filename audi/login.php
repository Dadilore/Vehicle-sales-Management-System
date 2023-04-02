<?php
session_start();

if(isset($_SESSION['auth']))
{
    $_SESSION['message']="you are aleady logged in";
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
                        <h4>Login Form</h4>
                    </div>
                    <div class="card-body">

                        <form action="logincode.php" method="POST" autocomplete="off">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input required type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="enter your email">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input required type="password" class="form-control" name="password" placeholder="enter your password">
                            </div>

                            <div>
                                <button type="submit" name="login_btn" class="btn btn-primary">Login Now</button>
                            </div>

                            not yet a member? <a href="register.php">sign up</a>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>