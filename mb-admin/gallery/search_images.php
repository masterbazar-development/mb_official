<?php
//ajax pagination pending
include('../config/dbcon.php');
if (isset($_POST['searchcategory'])) {
    $searchValue = mysqli_real_escape_string($con, $_POST['searchcategory']);

    $itemsPerPage = 8; // Adjust as needed
    $page = isset($_POST['page']) ? $_POST['page'] : 1;

    // Calculate the offset
    $offset = ($page - 1) * $itemsPerPage;

    // Query to get data for the current page
    $category_query = "SELECT gallery.*, categories.name as category_name
     FROM gallery
   JOIN categories ON gallery.category = categories.id
      WHERE gallery.status != '2'  AND (gallery.filename LIKE '%$searchValue%' OR categories.name LIKE '%$searchValue%')
                   LIMIT $offset, $itemsPerPage";
    $category_run = mysqli_query($con, $category_query);

    // Output data
    if (mysqli_num_rows($category_run) > 0) {
        foreach ($category_run as $item) {
?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['category_name'] ?></td>
                <td><?= $item['filename'] ?></td>
                <td>
                    <?php
                    echo ($item['status'] == '1') ? 'Hidden' : 'Visible';
                    ?>
                </td>
                <td>
                    <a href="../masterbazar24/mb-admin/category-edit.php?id=<?= $item['id'] ?>" target="_self" class="btn btn-info">Edit</a>
                </td>
                <td>
                    <form action="code.php" method="POST">
                        <button type="submit" name="category_delete" value="<?= $item['id'] ?>" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <!-- Add this where you want the pagination links to appear -->
<?php
        }
    } else {
        // No records found
        echo '<tr><td colspan="6">No Record Found</td></tr>';
    }
}
// Fetch total number of records
$totalRecordsQuery = "SELECT COUNT(*) as count FROM gallery WHERE status!='2'";
$totalRecordsResult = mysqli_query($con, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalRecordsResult)['count'];
// Calculate total pages
$totalPages = ceil($totalRecords / $itemsPerPage);

// Output pagination links
for ($i = 1; $i <= $totalPages; $i++) {
    echo '<a href="search-images?page='.$i.'" class="pagination-link "  data-page="' . $i . '">' . $i . '</a>';
}
?>
<style>
    #paginationContainer a {
        margin: 0 5px;
        padding: 5px 10px;
        text-decoration: none;
        background-color: #e6e6e6;
        color: #0D6EFD;
        border-radius: 5px;
        cursor: pointer;
    }

    #paginationContainer a:hover,
    .active {
        background-color: #0D6EFD !important;
        color: #fff !important;
    }
</style>