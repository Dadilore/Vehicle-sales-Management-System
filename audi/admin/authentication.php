<?php

session_start();

if(!isset($_SESSION['auth']))
{
    $SESSION['message'] = "login to access dashboard";
    header("Location: ../login.php");
    exit(0);
}
else
{
    if($_SESSION['auth_role'] != "1")
    {
    $SESSION['message'] = "you are not authorised as admin";
    header("Location: ../login.php");
    exit(0);
    }
}
