<?php
// load_images.php
include('../components/url.php');
include('../mb-admin/config/dbcon.php');
$itemsPerPage = 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $itemsPerPage;
//category ID from the query string
$category = isset($_GET['category']) ? $_GET['category'] : null;
//query to filter by category if  provided
$query = "SELECT gallery.*, categories.name as category_name
FROM gallery
JOIN categories ON gallery.category = categories.id
WHERE gallery.status != '2' " . ($category ? "AND gallery.category = $category" : "") . " LIMIT $offset, $itemsPerPage";

$category_run = mysqli_query($con, $query);

$images = [];

if (mysqli_num_rows($category_run) > 0) {
    foreach ($category_run as $item) {
        $images[] = [
            'url' => $mainUrl . 'mb-admin/gallery/uploads/' . $item['filename'],
            'alt' => $item['alt_tag'],
            'index'=>$item['id'],
        ];
    }
}
// Get total number of records
$totalRecordsQuery = "SELECT COUNT(*) as count
FROM gallery
JOIN categories ON gallery.category = categories.id
WHERE gallery.status != '2' " . ($category ? "AND gallery.category = $category" : "");
$totalRecordsResult = mysqli_query($con, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalRecordsResult)['count'];
$totalPages = ceil($totalRecords / $itemsPerPage);

$response = [
    'images' => $images,
    'totalPages' => $totalPages,
];

header('Content-Type: application/json');
echo json_encode($response);
