<?php
session_start();
include('../config/dbcon.php');
// Assuming you have a valid database connection in $con

if (isset($_POST['delete_images'])) {

    $post_id = $_POST['delete_images'];

    // Fetch image data before deleting the record
    $getimage = "SELECT filename FROM gallery WHERE id='$post_id' LIMIT 1";
    $img_res = mysqli_query($con, $getimage);
    if ($img_res) {
        $res_data = mysqli_fetch_assoc($img_res);
        $image = $res_data['filename'];
        // Delete the record from the database
        $delete_query = "DELETE FROM gallery WHERE id='$post_id' LIMIT 1";
        $delete_result = mysqli_query($con, $delete_query);

        if ($delete_result) {
            // Check if the image file exists before attempting to delete it
            $image_path = 'uploads/' . $image;
            if (file_exists($image_path)) {
                unlink($image_path);
                $_SESSION['message'] = "Post Deleted Successfully";
                header('Location: images-add');
            } else {
                // Handle the case where the image file does not exist
                echo "Image file not found: $image_path";
            }
        } else {
            // Handle the DELETE query error
            echo "Error deleting record: " . mysqli_error($con);
        }
    } else {
        // Handle the SELECT query error
        echo "Error fetching image data: " . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);

// if (isset($_POST['delete_images'])) {

//     $post_id = $_POST['delete_images'];

//     $delete = "SELECT FROM gallery WHERE id='$post_id' LIMIT 1";
//     $img_res = mysqli_query($con, $delete);
//     $res_data = mysqli_fetch_array($img_res);
//     $image = $res_data['image'];

//     $query = "DELETE FROM gallery WHERE id='$post_id' LIMIT 1";
//     $query_run = mysqli_query($con, $query);

//     if ($query_run) {

//         if (file_exists('uploads/' . $image)) {
//             unlink('uploads/' . $image);;
//         }

//         $_SESSION['message'] = "Image Deleted Successfully";
//         header('Location: post-view');
//         exit(0);
//     } else {
//         $_SESSION['message'] = "Something Went Wrong!";
//         header('Location: Image-add');
//         exit(0);
//     }
// }
