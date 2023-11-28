<?php 
include('../config/dbcon.php');
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$sql = "DELETE FROM mb_faq WHERE id = ". $data['id'];
$con->query($sql);
$con->close();

$json_data = [];
$response = array(
    'id' => $data['id'],
);
array_push($json_data, $response);
echo json_encode($json_data);
?>