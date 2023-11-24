<?php
include('../database.php');
header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$sql = "CREATE TABLE IF NOT EXISTS mb_faq (
    id INT AUTO_INCREMENT,
    category VARCHAR(50) NOT NULL,
    question VARCHAR(400) NOT NULL,
    answer VARCHAR(400) NOT NULL,
    priority_order VARCHAR(10) NOT NULL,

    PRIMARY KEY (id)
)";

$conn->query($sql);

$category = $conn->real_escape_string($data['category']);
$question = $conn->real_escape_string($data['question']);
$answer = $conn->real_escape_string($data['answer']);
$order = $conn->real_escape_string($data['priority_order']);

// Insert data into the table
$sqlInsertData = "INSERT INTO mb_faq (category, question, answer, priority_order)
                 VALUES ('$category', '$question', '$answer', '$order')";
$conn->query($sqlInsertData);
$conn->close();

// Perform any processing and create a response array 
$json_data = [];
$response = array(
    'id' => $data['id'],
    'category' => $category,
    'question' => $question,
    'answer' => $answer,
    'priority_order' => $order
);
array_push($json_data, $response);

echo json_encode($json_data);
?>