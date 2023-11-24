<?php 
include('../database.php');
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$sql = "DELETE FROM mb_faq WHERE id = ". $data['id'];
$conn->query($sql);
$conn->close();

$json_data = [];
$response = array(
    'id' => $data['id'],
);
array_push($json_data, $response);
echo json_encode($json_data);
?>