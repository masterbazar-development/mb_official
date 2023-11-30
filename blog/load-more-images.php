<?php
include('../mb-admin/config/dbcon.php');
$limit = 6;
// Get the current page number from the POST data
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
// Validate and sanitize the $page value (optional but recommended)
$page = max(1, $page); // 
$offset = ($page - 1) * $limit + 1;
$post = "SELECT * FROM posts WHERE status='0' ORDER BY posts.id DESC LIMIT $limit OFFSET $offset";
$result = $con->query($post);
$totalRows = $result->num_rows;
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {

		$posts[] = '<div class="text-head  image-container group/image">' .
			'<div class="group-hover/image">' .
			'<a href="../blogs/' . $row['slug'] . '" class="inline-block overflow-hidden">' .
			'<img src="../assets/client/images/blog/' . $row['image'] . '" class="rounded-md transition-all duration-700 ease-in-out hover:scale-[1.01] hover:rounded-md">' .
			'</a>' .
			'</div>' .
			'<a href="../blogs/' . $row['slug'] . '">' .
			'<h6 class="font-bold text-lg transition duration-150 hover:underline hover:underline-offset-4  group-hover/image:underline-offset-4 group-hover/image:underline ">' . $row['name'] . '</h6>' .
			'</a>' .
			'</div>';
	}
	// Check if there are more images available
	$hasMoreImages = $result->num_rows >= $limit;
} else {
	// No more images
	$hasMoreImages = false;
}

// Close the database connection
$con->close();

// Return the posts and the flag indicating whether more images are available
$response = array(
	'posts' => implode('', $posts),
	'hasMoreImages' => $hasMoreImages
);

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
exit();
