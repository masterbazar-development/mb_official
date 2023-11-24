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
                    <h4>ADD Category
                        <a href="view-register" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <lable for="">Select Main</lable>
                                <select name="select-main" class="form-control">
                                <option invalid>Select your main category</option>
                                    <option>BLOG</option>
                                    <option>FAQ</option>
                                    <option>TESTIMONIAL</option>
                                    <option>REVIEW</option>
                                    <option>CLIENT's LOGO</option>
                                    <option>PROJECTS</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <lable for="">Name of Sub Category</lable>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                                <lable for="">Slug</lable>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <lable for="">Description</lable>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Navbar Status</lable>
                                <input type="checkbox" name="navbar_status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Status</lable>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="category_add" class="btn btn-primary">Save Sub Category</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>




<?php include('../includes/footer.php') ?>