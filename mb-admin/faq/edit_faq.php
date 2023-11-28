<?php
include('../config/dbcon.php');
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$category = $data['category'];
$question = $data['question'];
$answer = $data['answer'];
$priority_order = $data['priority_order'];

$sql = "UPDATE mb_faq 
        SET category = '".$category."', question = '".$question."', answer = '".$answer."', priority_order = '".$priority_order."'
        WHERE id = ".$id;

$con->query($sql);
$con->close();


$json_data = [];
$response = array(
    'id' => $id ,
    'category' => $category,
    'question' => $question,
    'answer' => $answer,
    'priority_order' => $priority_order,
);

array_push($json_data, $response);
echo json_encode($json_data);
