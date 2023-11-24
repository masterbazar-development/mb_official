<?php
include('authentication.php');
include('includes/header.php');
include('includes/navbar-top.php')
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->

    <div class="row">
        <div class="col-md-6">
            <div class="card bg-blue text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Category</h5>
                    <?php
                    $dash_category_query = "SELECT * FROM categories";
                    $dash_category_query_run = mysqli_query($con, $dash_category_query);

                    if ($category_total = mysqli_num_rows($dash_category_query_run)) {
                        echo '<h4 class="mb-0 py-2">' . $category_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0 py-2"> No  Data </h4>';
                    }
                    ?>
                    <a href="category-add" class="card-link text-white">Add Category</a>
                    <a href="category-view" class="card-link text-white">View Category</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-blue text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Post</h5>
                    <?php
                    $dash_posts_query = "SELECT * FROM posts";
                    $dash_posts_query_run = mysqli_query($con, $dash_posts_query);

                    if ($posts_total = mysqli_num_rows($dash_posts_query_run)) {
                        echo '<h4 class="mb-0 py-2">' . $posts_total . '</h4>';
                    } else {
                        echo '<h4 class="mb-0 py-2"> No  Data </h4>';
                    }
                    ?>
                    <a href="post-add" class="card-link text-white">Add Post</a>
                    <a href="post-view" class="card-link text-white">View Post</a>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include('includes/footer.php') ?>