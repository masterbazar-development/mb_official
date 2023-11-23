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
                    <h4>View Category
                        <a href="category-add" class="btn btn-danger float-end">Add Category</a>
                    </h4>
                    <span class="float-middle">
                        <input type="search" placeholder="search by main category or name" aria-label="search" class="form-control mt-3" name="searchcategory" id="searchcategory">
                    </span>
                </div>
                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-bordered table-stripe" id="categoryTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Main Category</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // this is just for exception pagination.php is real query but to make clear always put same values  itemsperpage same in both files.
                                $itemsPerPage = 2; // Adjust as needed
                                $page = isset($_POST['page']) ? $_POST['page'] : 1;
                                // Calculate the offset
                                $offset = ($page - 1) * $itemsPerPage;
                                $category = "SELECT * FROM categories WHERE status!='2' LIMIT $itemsPerPage, $offset";
                                $category_run = mysqli_query($con, $category);

                                if (mysqli_num_rows($category_run) > 0) {
                                    foreach ($category_run as $item) {
                                ?>
                                        <tr>
                                            <td><?= $item['id'] ?></td>
                                            <td><?= $item['name'] ?></td>
                                            <td><?= $item['main_category'] ?></td>
                                            <td><?php
                                                if ($item['status'] == '1') {
                                                    echo 'Hidden';
                                                } else {
                                                    echo 'Visible';
                                                }
                                                ?></td>
                                                <td>
                                                    <a href="category-edit?id=<?= $item['id'] ?>" class="btn btn-info">Edit</a>
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

                                ?>
                            </tbody>
                        </table>
                        <!-- pagi--->
                        <div id="paginationContainer">
                            <?php
                            // Fetch total number of records
                            $totalRecordsQuery = "SELECT COUNT(*) as count FROM categories WHERE status!='2'";
                            $totalRecordsResult = mysqli_query($con, $totalRecordsQuery);
                            $totalRecords = mysqli_fetch_assoc($totalRecordsResult)['count'];

                            // Calculate total pages
                            $totalPages = ceil($totalRecords / $itemsPerPage);

                            // Output pagination links
                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo '<a href="category-view?page=<?= $i ?>" class="pagination-link "  data-page="' . $i . '">' . $i . '</a>';
                            }
                            ?>
                            <style>
                                #paginationContainer a {
                                    margin: 0 5px;
                                    padding: 5px 10px;
                                    text-decoration: none;
                                    background-color: #e6e6e6;
                                    color: #0D6EFD;
                                    border-radius: 5px;
                                    cursor: pointer;
                                }

                                #paginationContainer a:hover ,.active{
                                    background-color: #0D6EFD!important;
                                    color: #fff !important;
                                }
                            </style>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var searchInput = document.getElementById('searchcategory');

        searchInput.addEventListener('input', function() {
            var searchValue = this.value;
            console.log(searchValue);

            fetch('search_categories.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'searchcategory=' + searchValue,
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('categoryTable').getElementsByTagName('tbody')[0].innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
        //
        function loadPaginationData(page) {
            fetch('pagination.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'page=' + page,
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('categoryTable').getElementsByTagName('tbody')[0].innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Initial load
        loadPaginationData(1);

        // Handle pagination click
        document.getElementById('paginationContainer').addEventListener('click', function(e) {
            if (e.target.classList.contains('pagination-link')) {
                e.preventDefault();
                // Remove the "active" class from all pagination links
                var paginationLinks = document.querySelectorAll('.pagination-link');
                paginationLinks.forEach(function(link) {
                    link.classList.remove('active');
                });

                // Add the "active" class to the clicked pagination link
                e.target.classList.add('active');
                var page = e.target.dataset.page;
                loadPaginationData(page);
            }
        });
    });
</script>
<?php include('includes/footer.php') ?>