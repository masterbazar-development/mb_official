<?php
include ('../database.php');

header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

// Perform any processing and create a response array
$response = array(
    'status' => 'success',
    'message' => 'Form data received successfully',
    'data' => array(
        'question' => $data,
    )
);

echo json_encode($response);

?>