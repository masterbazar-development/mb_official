<?php 

// $host = "mysql";
// $username = "u819577886_tanima_master";
// $password = "DC~wMg[6Hmaster#!";
// $database = "u819577886_masterbazar23";

$host = "localhost";
$username = "root";
$password = "";
$database = "masterbazar23";

$con = mysqli_connect("$host", "$username", "$password" , "$database");

if(!$con){
    header("Location: ../errors/dberror.php");
    die();
}


?>

