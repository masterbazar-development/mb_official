<?php

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
                    <h4>Add FAQ
                        <a href="view-register" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../code" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 mb-3">
                            <lable for="">Category List</lable>
                            <?php
                            $category = "SELECT * FROM categories WHERE status='0' AND main_category='FAQ'";
                            $category_run = mysqli_query($con, $category);
                            // print_r($category_run);
                            if (mysqli_num_rows($category_run) > 0) {
                            ?>
                                <select name="category" class="form-control">
                                    <option value="">-- Select Category --</option>
                                    <?php
                                    foreach ($category_run as $categoryitem) {
                                    ?>
                                        <option value="<?php echo  $categoryitem['id'] ?>">
                                            <?php echo  $categoryitem['name'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            <?php
                            } else {
                            ?>
                                <h6>No Category Available</h6>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <lable for="">Question</lable>
                                <input type="text" name="question" class="form-control" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <lable for="">Answer</lable>
                                <input type="text" name="answer" class="form-control" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <lable for="">Order</lable>
                                <input type="number" name="order" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Status</lable>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="faq_add" class="btn btn-primary">Add Testimonial</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('../includes/footer.php') ?>