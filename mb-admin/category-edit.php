<?php

include('authentication.php');
include('includes/header.php');
include('includes/navbar-top.php')
?>
<div class="container-fluid px-4">

    <div class="row my-4">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category
                        <a href="category-view" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $category_id = $_GET['id'];
                        $category_edit = "SELECT * FROM categories WHERE id='$category_id' LIMIT 1";
                        $category_run = mysqli_query($con, $category_edit);

                        if (mysqli_num_rows($category_run) > 0) {
                            $row = mysqli_fetch_array($category_run);
                    ?>

                            <form action="code.php" method="POST">
                                <input type="hidden" name="category_id" value="<?= $row['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <lable for="">Select Main</lable>
                                        <select name="select-main" class="form-control">
                                            <option aria-readonly="true"><?= $row['main_category'] ?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <lable for="">Name</lable>
                                        <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <lable for="">Slug</lable>
                                        <input type="text" name="slug" value="<?= $row['slug'] ?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <lable for="">Description</lable>
                                        <textarea name="description" class="form-control" rows="4"><?= $row['description'] ?></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <lable for="">Navbar Status</lable>
                                        <input type="checkbox" name="navbar_status" <?= $row['navbar_status'] == '1' ? 'checked' : '' ?> width="70px" height="70px" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <lable for="">Status</lable>
                                        <input type="checkbox" name="status" <?= $row['status'] == '1' ? 'checked' : '' ?> width="70px" height="70px" />
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="category_update" class="btn btn-primary">Update Category</button>
                                    </div>
                                </div>
                            </form>


                        <?php
                        } else {
                        ?>
                            <h4>No Record Found</h4>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php') ?>