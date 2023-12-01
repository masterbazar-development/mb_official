<?php 

// $host = "mysql";
// $username = "u819577886_tanima_master";
// $password = "DC~wMg[6Hmaster#!";
// $database = "u819577886_masterbazar23";

$host = "localhost";
$username = "u819577886_masterbazar24";
$password = "[j1R3Q7]feI";
$database = "u819577886_masterbazar24";

$con = mysqli_connect("$host", "$username", "$password" , "$database");

if(!$con){
    header("Location: ../errors/dberror.php");
    die();
}


?>

