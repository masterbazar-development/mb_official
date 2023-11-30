<?php
include('../authentication.php');
include('../includes/header.php');
include('../includes/navbar-top.php');

if (isset($_POST['id'])) {
    $editId = $_POST['id'];

    // Fetch data for the specified id from the database
    $query = "SELECT * FROM gallery WHERE id = '$editId' LIMIT 1";
    $result = mysqli_query($con, $query);

    if ($result) {
        $imageData = mysqli_fetch_assoc($result);

        // Send the fetched data as JSON response
        echo json_encode(['success' => true, 'imageData' => $imageData]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}

// if (isset($_POST['edit_id'])) {
//     $editId = $_POST['edit_id'];
//     $category = mysqli_real_escape_string($con, $_POST['edit_category']);
//     // Add other fields here as needed

//     // Check if the category exists
//     $categoryCheckQuery = "SELECT * FROM categories WHERE id = '$category' LIMIT 1";
//     $categoryCheckResult = mysqli_query($con, $categoryCheckQuery);

//     if ($categoryCheckResult && mysqli_num_rows($categoryCheckResult) > 0) {
//         // Update the gallery record
//         $updateQuery = "UPDATE gallery SET category = '$category' WHERE id = '$editId' LIMIT 1";
//         $updateResult = mysqli_query($con, $updateQuery);

//         if ($updateResult) {
//             echo json_encode(['success' => true, 'message' => 'Record updated successfully']);
//         } else {
//             echo json_encode(['success' => false, 'message' => 'Error updating record']);
//         }
//     } else {
//         echo json_encode(['success' => false, 'message' => 'Invalid category']);
//     }
// } else {
//     echo json_encode(['success' => false, 'message' => 'Invalid request']);
// }
?>
