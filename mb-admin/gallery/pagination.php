<?php
//ajax pagination
include('../config/dbcon.php');
$itemsPerPage = 10; // Adjust as needed
$page = isset($_POST['page']) ? $_POST['page'] : 1;
// Calculate the offset 
$offset = ($page - 1) * $itemsPerPage;
// Query to get data for the current page
$category_query = "SELECT gallery.*, categories.name as category_name
FROM gallery
JOIN categories ON gallery.category = categories.id
 WHERE gallery.status != '2' LIMIT $offset, $itemsPerPage";
$category_run = mysqli_query($con, $category_query);
// Output data
if (mysqli_num_rows($category_run) > 0) {
    foreach ($category_run as $item) {
?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['category_name'] ?></td>
            <td><?= $item['filename'] ?></td>
            <td><img src="uploads/<?= $item['filename'] ?>" class="" width="100" height="100" alt=""></td>
            <td>
                <?php
                echo ($item['status'] == '1') ? 'Hidden' : 'Visible';
                ?>
            </td>
            <!-- <td>
                <a href="edit-image?id=<?= $item['id'] ?>" target="_self" class="btn btn-info" data-id="<?= $item['id'] ?>">Edit</a>
            </td> -->
            <td>
                <a href="../masterbazar24/mb-admin/images-add?id=<?= $item['id'] ?>" target="_self" class="btn btn-info edit-btn"  data-id="<?= $item['id'] ?>" >Edit</a>
            </td>
            <td>
                <form action="delete-images" method="POST">
                    <button type="submit" name="delete_images" value="<?= $item['id'] ?>" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
<?php
    }
} else {
    // No records found
    echo '<tr><td colspan="6">No Record Found</td></tr>';
}
?>