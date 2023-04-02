<?php
session_start();
include('config/dbcon.php');
include('message.php');

if (isset($_POST['register_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    if ($password == $cpassword) {
        //check email
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemail_run) > 0) {
            //email already exists
            $_SESSION['message'] = "email already exists";
            header("Location: register.php");
            exit(0);
        } else {
            $user_query = "INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if ($user_query_run) {
                $_SESSION['message'] = "registered succesfully";
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['message'] = "something went wrong";
                header("Location: register.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = "Password and Confirm password does not match";
        header("Location: register.php");
        exit(0);
    }
} else {
    header("Location: register.php");
    exit(0);
}
