<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    $_SESSION['message'] ="logged out succesfully";
    header("Location: ../login.php");
    exit(0);
    
}
else
{

}
?>