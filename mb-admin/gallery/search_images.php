<?php
//ajax pagination pending
include('../config/dbcon.php');
if (isset($_POST['searchcategory'])) {
    $searchValue = mysqli_real_escape_string($con, $_POST['searchcategory']);
    $category_query = "SELECT gallery.*, categories.name as category_name
     FROM gallery
   JOIN categories ON gallery.category = categories.id
      WHERE gallery.status != '2'  AND (gallery.filename LIKE '%$searchValue%' OR categories.name LIKE '%$searchValue%')";
    $category_run = mysqli_query($con, $category_query);

    // Output data
    if (mysqli_num_rows($category_run) > 0) {
        foreach ($category_run as $item) {
?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['category_name'] ?></td>
                <td><?= $item['filename'] ?></td>
                <td><img src="uploads/<?= $item['filename'] ?>" class="" width="80" height="80" alt=""></td>
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
