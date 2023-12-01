<?php
// load_teams.php
include('../components/url.php');
include('../mb-admin/config/dbcon.php');
$itemsPerPage = 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $itemsPerPage;
//category ID from the query string
$category = isset($_GET['category_team']) ? $_GET['category_team'] : null;
//query to filter by category if  provided
$query = "SELECT team.*, categories.name as category_name
FROM team
JOIN categories ON team.category = categories.id
WHERE team.status != '2' " . ($category ? "AND team.category = $category" : "") . " LIMIT $offset, $itemsPerPage";
$category_run = mysqli_query($con, $query);
$team = [];
if (mysqli_num_rows($category_run) > 0) {
    foreach ($category_run as $item) {
        $team[] = [
            'url' => $mainUrl . 'mb-admin/gallery/uploads/team/' . $item['filename'],
            'alt' => $item['alt_tag'],
        ];
    }
}
// Get total number of records
$totalRecordsQuery = "SELECT COUNT(*) as count
FROM team
JOIN categories ON team.category = categories.id
WHERE team.status != '2' " . ($category ? "AND team.category = $category" : "");
$totalRecordsResult = mysqli_query($con, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalRecordsResult)['count'];
$totalPages = ceil($totalRecords / $itemsPerPage);

$response = [
    'team' => $team,
    'totalPages' => $totalPages,
];

header('Content-Type: application/json');
echo json_encode($response);
