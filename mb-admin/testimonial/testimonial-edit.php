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
    $upload_directory = '../assets/client/images/testimonial/client-image/';
  
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
$content = '';

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
                <h4>Edit Client Testimonial
                    <a href="view-testimonial" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?php
                    if(isset($_GET['id']))
                    {
                        $post_id = $_GET['id'];
                        $post_query = "SELECT * FROM testimonials WHERE id='$post_id' LIMIT 1";
                        $post_query_res = mysqli_query($con, $post_query);

                        if(mysqli_num_rows($post_query_res) > 0)
                        {
                            $post_row = mysqli_fetch_array($post_query_res);
                            ?>

                                <form action="../code.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="post_id" value="<?= $post_row['id'] ?>">
                                <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <lable for="">Client Name</lable>
                                            <input type="text" name="client-name" value="<?= $post_row['name'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <lable for="">Comment Heading</lable>
                                            <input type="text" name="comment-head" value="<?= $post_row['title'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <lable for="">Comment</lable>
                                            <textarea name="comment" class="form-control" rows="4"><?= $post_row['review'] ?></textarea>
                                        </div>
                                    
                                        <div class="col-md-6 mb-3">
                                            <lable for="">Client Image</lable>
                                            <input type="hidden" name="old_image" value="<?= $post_row['image'] ?>"/>
                                            <input type="file" name="client-image" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="testimonial_update" class="btn btn-primary">Update Client Testimonial</button>
                                        </div>
                                    </div>
                                </form>
                <?php
                        }
                        else 
                        {
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

<?php
include('../includes/footer.php')
?>