<?php
include('config/dbcon.php');
if(isset($_POST['searchcategory'])) {
    $searchValue = mysqli_real_escape_string($con, $_POST['searchcategory']);

    $category = "SELECT * FROM categories WHERE status!='2' AND name LIKE '%$searchValue%' or main_category LIKE '%$searchValue%' ";
    $category_run = mysqli_query($con, $category);

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
        <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="5">No Record Found</td>
        </tr>
<?php
    }
}
?>