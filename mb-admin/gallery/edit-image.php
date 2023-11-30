<?php
// include('../../components/header.php'); 
include('../authentication.php');
include('../includes/header.php');
include('../includes/navbar-top.php')
?>
<div class="container-fluid px-4">

    <div class="row my-4">
        <div class="col-md-12">
            <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Gallery
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../code" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 mb-3">
                            <lable for="">Category List</lable>
                            <?php
                            if (isset($_GET['id'])) {
                                $imageid = $_GET['id'];
                                $category = "SELECT gallery.*, categories.name as category_name,categories.id as category_id
                                FROM gallery
                                JOIN categories ON gallery.category = categories.id
                                WHERE gallery.id='$imageid' LIMIT 1";
                                $category_run = mysqli_query($con, $category);
                                if (mysqli_num_rows($category_run) > 0) {
                                    $row = mysqli_fetch_array($category_run);
                            ?>
                                    <select name="category" class="form-control">
                                    <option aria-readonly="true" value="<?php echo $row['category_id'] ?>"><?= $row['category_name'] ?></option>
                                        <?php
                                        foreach ($category_run as $categoryitem) {
                                        ?>
                                           
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                   ?> <h6>No Category Available</h6><?php
                                }

                                ?>

                            <?php
                            }
                            ?>
                        </div>
                        <div class="row">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <div class="col-md-12 mb-3">
                                <lable for="">Upload Images</lable>
                                <input type="file" name="files[]" value="<?= $row['filename'] ?>" class="form-control" id="files" multiple required>
                            </div>
                            <div class="col-md-5 mb-3" id="altTagsContainer">
                                <lable for="">Alt Tag</lable>
                                <input type="text" name="alt_tags[]" value="<?= $row['alt_tag'] ?>" class="form-control" placeholder="Enter alt tag" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Status</lable>
                                <input type="checkbox" name="status" <?= $row['status'] == '1' ? 'checked' : '' ?> width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="edit_add-image" onclick="uploadFiles()" class="btn btn-primary">Edit Image</button>
                            </div>
                        </div>
                    </form>