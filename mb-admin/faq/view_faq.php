<?php 
include('../database.php');
header('Content-Type: application/json');

$sql = "SELECT * FROM mb_faq";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $faq_el = array(
            'id' => $row['id'],
            'category' => $row['category'],
            'question' => $row['question'],
            'answer' => $row['answer']
        );

        array_push($data, $faq_el);
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'No results found.'));
}

$conn->close();

$response = json_encode($data);
echo $response;
?>