<?php

include('../authentication.php');
include('../includes/header.php');
include('../includes/navbar-top.php');

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
$limit = 10;
$offset = ($page - 1) * $limit;
?>
<div class="container-fluid px-4">
    <div class="row my-4">
        <div class="col-md-12">
            <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>View Post
                        <a href="post-add" class="btn btn-danger float-end">Add Post</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <!-- <th>Category</th> -->
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Preview</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $post = "SELECT * FROM posts WHERE status!='2' ORDER BY posts.id DESC limit $offset,$limit";
                                // $post = "SELECT p.*, c.name AS cname FROM posts p JOIN categories c ON c.id = p.category_id";
                                $posts_run = mysqli_query($con, $post);

                                if (mysqli_num_rows($posts_run) > 0) {
                                    foreach ($posts_run as $postItem) {
                                ?>
                                        <tr>
                                            <td><?= $postItem['id']; ?></td>
                                            <td><?= $postItem['name']; ?></td>
                                            <!-- <td> < // $postItem['cname']; ?></td> -->
                                            <td><img src="<?php echo $mainUrl;?>assets/client/images/blog/<?= $postItem['image'] ?>" class=""  width="140" alt=""></td>
                                            <td>

                                                <?= $postItem['status'] == '1' ? 'Hidden' : 'Visible' ?></td>

                                            <td>
                                                <a href="preview-post?title=<?= $postItem['slug'] ?>" target="_blank" class="btn btn-success">Preview</a>
                                            </td>

                                            <td>
                                                <a href="post-edit?id=<?= $postItem['id'] ?>" class="btn btn-success">Edit</a>
                                            </td>



                                            <td>
                                                <form action="../code.php" method="POST">
                                                    <button type="submit" name="post_delete_btn" value="<?= $postItem['id'] ?>" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7">No Record Found</td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <!-- Pagination begin -->
                        <?php
                        $pagination = "SELECT * FROM posts";
                        $run_q = mysqli_query($con, $pagination);
                        $total_post = mysqli_num_rows($run_q);
                        $pages = ceil($total_post / $limit);
                        if ($total_post > $limit) {
                        ?>
                            <ul class="pagination pt-2 pb-5">
                                <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                    <li class="page-item <?= ($i == $page) ? $active = "active" : ""; ?>">
                                        <a href="post-view?page=<?= $i ?>" class="page-link"><?= $i ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php
                        }
                        ?>
                        <!-- Pagination End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('../includes/footer.php') ?>