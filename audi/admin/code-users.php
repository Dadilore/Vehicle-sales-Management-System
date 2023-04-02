<?php
 include('authentication.php');
 include('../config/dbcon.php');

 if(isset($_POST['user_delete']))
 {
     $user_id = $_POST['user_delete'];

     $query = "DELETE FROM users WHERE id='$user_id' ";
     $query_run = mysqli_query($con,$query);

     
    if($query_run)
    {
     $_SESSION['message'] = "User deleted succesfully";
     header("Location: view-register.php");
     exit(0);
    }
    else
    {
     $_SESSION['message'] = "something went wrong";
     header("Location: view-register.php");
     exit(0);
    }

 }

if(isset($_POST['add_user']))
{
     $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status']  ==true ? '1': '0';

    $query = "INSERT INTO users (name,email,password,role_as,status) VALUES ('$name','$email','$password','$role_as','$status')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
     $_SESSION['message'] = "Admin/User Added succesfully";
     header("Location: view-register.php");
     exit(0);
    }
    else
    {
     $_SESSION['message'] = "something went wrong";
     header("Location: view-register.php");
     exit(0);
    }
}






 if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status']  ==true ? '1': '0';

    $query = "UPDATE users SET name ='$name',email ='$email',password='$password', role_as='$role_as',status='$status' WHERE id='$user_id' ";
       $query_run = mysqli_query($con, $query);

       if($query_run)
       {
            $_SESSION['message'] = "updated succesfully";
            header("Location: view-register.php");
            exit(0);
       }

}
