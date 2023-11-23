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
                    <h4>Add Testimonial
                        <a href="view-register" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../code" method="POST" enctype="multipart/form-data">
                        <div class="row"><div class="col-md-4 mb-3">
                                <lable for="">Client Name</lable>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <lable for="">Image Upload</lable>
                                <input type="file" name="image" class="form-control" required>
                            </div>
                            <div class="col-md-5 mb-3">
                                <lable for="">Comment Heading</lable>
                                <input type="text" name="com-head" class="form-control" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <lable for="">Comment</lable>
                                <textarea name="comment" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Navbar status</lable>
                                <input type="checkbox" name="navbar_status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Status</lable>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="testimonial_add" class="btn btn-primary">Add Testimonial</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('../includes/footer.php') ?>