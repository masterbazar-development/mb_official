<?php
//ajax pagination pending
include('config/dbcon.php');

$itemsPerPage = 10; // Adjust as needed
$page = isset($_POST['page']) ? $_POST['page'] : 1;

// Calculate the offset
$offset = ($page - 1) * $itemsPerPage;

// Query to get data for the current page
$category_query = "SELECT * FROM categories WHERE status!='2' LIMIT $offset, $itemsPerPage";
$category_run = mysqli_query($con, $category_query);

// Output data
if (mysqli_num_rows($category_run) > 0) {
    foreach ($category_run as $item) {
?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['main_category'] ?></td>
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
?>
