<?php
session_start();
include('../config/dbcon.php');

if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $tempPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    
    // Generate a unique filename with extension
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    $newFileName = uniqid() . '.' . $extension;
    
    $uploadPath = '../images/blog/' . $newFileName; // Set the path where you want to store the uploaded image
  
    if (move_uploaded_file($tempPath, $uploadPath)) {
      // Return the URL of the uploaded image
      echo $uploadPath;   
    }
  }
  
  exit();
?>