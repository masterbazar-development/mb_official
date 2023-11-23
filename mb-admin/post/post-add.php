<?php
include('../authentication.php');
include('../includes/header.php');
include('../includes/navbar-top.php');

if (isset($_POST['submit'])) {
    // Handle the file upload
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];
  
    // Specify the directory to which the image will be uploaded
    $upload_directory = '../images/blog/';
  
    // Generate a unique name for the image
    $image_path = $upload_directory . uniqid() . '_' . $image_name;
  
    // Move the uploaded image to the desired location
    move_uploaded_file($image_tmp, $image_path);
  
    // Get the Summernote content from the textarea
    $content = $_POST['content'];
  
    // Replace the image source in the Summernote content with the uploaded image path
    $content = str_replace('src="data:image', 'src="' . $image_path . '" data-filename="image', $content);
  
    // Use the modified content as needed (e.g., save it to the database, display it, etc.)
   
    // You can also store the image path in the database if needed
    // $query = "INSERT INTO posts (content, image_path) VALUES ('$content', '$image_path')";
    // mysqli_query($connection, $query);
  
    // Redirect or perform any other necessary actions
    // header('Location: your-page.php');
    exit();
  } 
// Sample string with Base64 data
// $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. <img src="data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD...">';

// Regular expression pattern to match Base64 data
$pattern = '/src="data:image\/[^;]+;base64,([^"]+)"/';

// Replace Base64 data with actual image data
$replacedContent = preg_replace_callback($pattern, function($matches) {
    $base64Data = $matches[1];
    $imageData = base64_decode($base64Data);
    $filename = 'image.jpg'; // Provide a filename for the image
    file_put_contents($filename, $imageData);
    return 'src="' . $filename . '"';
}, $content);

// Output the replaced content
echo $replacedContent;
?>

<div class="container-fluid px-4">
    <div class="row my-4">
        <div class="col-md-12">
            <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>ADD POST
                        <a href="post-view" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="../code" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12 mb-3">
                            <lable for="">Category List</lable>
                            <?php
                              $category = "SELECT * FROM categories WHERE status='0' AND main_category='BLOG'";
                              $category_run = mysqli_query($con, $category);
                                // print_r($category_run);
                              if(mysqli_num_rows($category_run) > 0) {
                              ?>
                                <select name="category_id" class="form-control">
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
                            <div class="col-md-6 mb-3">
                                <lable for="">Title</lable>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Slug</lable>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <lable for="">Description</lable>
                                <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <lable for="">Meta Title</lable>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Meta Description</lable>
                                <textarea name="meta_description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Schedule Post(Testing Phase input) </lable>
                                <input type="datetime-local" name="meta_keyword" class="form-control" rows="4">
                            </div>
                            <div class="col-md-6 mb-3">
                                <lable for="">Image</lable>
                                <input type="file" name="image" class="form-control">
                            </div>

                             <div class="col-md-6 mb-3">
                                <lable for="">Draft</lable>
                                <input type="checkbox" name="status" width="70px" height="70px" />
                            </div> 
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="post_add" class="btn btn-primary"> Add Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/footer.php')
?>