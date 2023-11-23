<?php
session_start();
include('config/dbcon.php');

if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Please Login First";
    header("Location: login");
    exit(0);
}
else{
    if($_SESSION['auth_role'] != "1")
    {
        $_SESSION['message'] = "You are not Authorised as Admin";
    header("Location: login");
    exit(0);
    }
}

?>