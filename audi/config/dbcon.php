<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "audi";

//creating databse connection
$con = mysqli_connect($host, $username, $password, $database);

//check the database connection
if(!$con)
{
    die("connection failed: ". mysqli_connect_error());

}
else
{
    echo "";
} 
?>