<?php
session_start();
include('../config/dbcon.php');

$category = $_POST['category'];
$status = $_POST['status'];
$uploadsDir = 'uploads/team/'; // Set your uploads directory
$uploadedFiles = [];
// alt tag for all files (assuming it's the same for all)
$altTag = $_POST['alt_tags'][0];//assuming it as an array
foreach ($_FILES['files']['name'] as $key => $filename) {
    $tmpName = $_FILES['files']['tmp_name'][$key];
    $uploadPath = $uploadsDir . basename($filename);
    if (move_uploaded_file($tmpName, $uploadPath)) {
        $uploadedFiles[] = $filename;
        $sql = "INSERT INTO team (category, filename, alt_tag, status) VALUES ('$category', '$filename', '$altTag', '$status')";
        $result = mysqli_query($con, $sql);
        
    }
}
?>
