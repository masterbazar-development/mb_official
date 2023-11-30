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
                    <h4>Add Images
                    </h4>
                </div>
                <div class="card-body">
                    <!-- edit -->
                    <form id="editFormContainer" class="d-none" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 mb-3">
                            <lable for="">Category List</lable>
                            <?php
                            $category = "SELECT * FROM categories WHERE status='0' AND main_category='GALLERY'";
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
                                <lable for="">Upload Images</lable>
                                <input type="file" name="files[]" class="form-control" id="files" multiple required>
                            </div>
                            <div class="col-md-5 mb-3" id="altTagsContainer">
                                <lable for="">Alt Tag</lable>
                                <input type="text" name="alt_tags[]" class="form-control" placeholder="Enter alt tag" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Status</lable>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="images_add" onclick="uploadFiles()" class="btn btn-primary">Add Images</button>
                            </div>
                        </div>
                    </form>
                    <!-- edit -->
                    <form id="uploadForm" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 mb-3">
                            <lable for="">Category List</lable>
                            <?php
                            $category = "SELECT * FROM categories WHERE status='0' AND main_category='GALLERY'";
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
                                <lable for="">Upload Images</lable>
                                <input type="file" name="files[]" class="form-control" id="files" multiple required>
                            </div>
                            <div class="col-md-5 mb-3" id="altTagsContainer">
                                <lable for="">Alt Tag</lable>
                                <input type="text" name="alt_tags[]" class="form-control" placeholder="Enter alt tag" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Status</lable>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="images_add" onclick="uploadFiles()" class="btn btn-primary">Add Images</button>
                                <button type= "submit" class="d-none" name="edit_add" onclick="" class="btn btn-primary">Edit Image</button>
                            </div>
                        </div>
                    </form>
                    <!-- images list -->
                    <!-- Display uploaded images -->
                    <div id="imageList">
                        <div class="card-header">
                            <h4>View Images
                                <a href="category-add" class="btn btn-danger float-end">Add Category</a>
                            </h4>
                            <span class="float-middle">
                                <input type="search" placeholder="search by main category or Image-name" aria-label="search" class="form-control mt-3" name="searchcategory" id="searchcategory">
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripe" id="categoryTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>category</th>
                                            <th>Image</th>
                                            <th>Image-preview</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $itemsPerPage = 10; //always put same value 
                                        $page = isset($_POST['page']) ? $_POST['page'] : 1;
                                        // Calculate the offset
                                        $offset = ($page - 1) * $itemsPerPage;
                                        $category = "SELECT gallery.*, categories.name as category_name
                                        FROM gallery
                                        JOIN categories ON gallery.category = categories.id
                                        WHERE gallery.status != '2' LIMIT $offset, $itemsPerPage";
                                        // $category = "SELECT * FROM gallery WHERE status!='2'";
                                        $category_run = mysqli_query($con, $category);

                                        if (mysqli_num_rows($category_run) > 0) {
                                            foreach ($category_run as $item) {
                                        ?>
                                                <tr>
                                                    <td><?= $item['id'] ?></td>
                                                    <td><?= $item['category_name'] ?></td>
                                                    <td><?= $item['filename'] ?></td>
                                                    <td><img src="<?php echo $mainurl; ?>mb-admin/gallery/uploads/<?= $item['filename'] ?>" class="" width="100" height="100" alt=""></td>
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
                                                        <a href="images-addd?id=<?= $item['id'] ?>" class="btn btn-info">Edit</a>
                                                    </td>
                                                    <td>
                                                        <!-- <form action="code.php" method="POST">
                                                            <button type="submit" name="category_delete" value="<?= $item['id'] ?>" class="btn btn-danger">Delete</button>
                                                        </form> -->
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
                                    $totalPages = ceil($totalRecords / $itemsPerPage);
                                    // Output pagination links but next page records from pagination.php on click
                                    for ($i = 1; $i <= $totalPages; $i++) {
                                        echo '<a class="pagination-link "  data-page="' . $i . '">' . $i . '</a>';
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

                                        #paginationContainer a:hover,
                                        .active {
                                            background-color: #0D6EFD !important;
                                            color: #fff !important;
                                        }
                                    </style>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- view end -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script async>
    function uploadFiles() {
        var formData = new FormData(document.getElementById('uploadForm'));
        fetch('upload-gallery', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                console.log('Server Response:', data);
                if (data.success) {
                    // Update the list of uploaded images
                    updateImageList(data.images);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
    // search
    var searchInput = document.getElementById('searchcategory');
    searchInput.addEventListener('input', function() {
        var searchValue = this.value;
        console.log(searchValue);

        fetch('search_images', {
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
    //pagination
    function loadPaginationData(page) {
        fetch('pagination', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'page=' + page,
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                document.getElementById('categoryTable').getElementsByTagName('tbody')[0].innerHTML = data;
            })
            .catch(error => {
                console.error('Error:', error);
                // Display an error message to the user
                alert('Error loading pagination data. Please try again.');
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
    //edit-faq
    document.getElementById('categoryTable').addEventListener('click', function(e) {
        if (e.target.classList.contains('edit-btn')) {
            e.preventDefault();
            var editId = e.target.dataset.id;
<<<<<<< HEAD
=======
            console.log(editId);
>>>>>>> 694124e47b38471224e88e34a7e3af050de6bcf9
            fetch('edit-images?id=' + editId, {
                    method: 'POST',
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
<<<<<<< HEAD
=======

>>>>>>> 694124e47b38471224e88e34a7e3af050de6bcf9
                .then(data => {
                    console.log('Server Response:', data);
                    if (data.success) {
                        populateEditForm(data.imageData);
                        document.getElementById('editFormContainer').style.display = 'block';
                    } else {
                        console.error('Error: ', data); // Log the entire response for debugging
                        console.error('Error fetching image data');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    });
</script>
<?php include('../includes/footer.php') ?>