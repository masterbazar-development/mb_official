<?php
include('authentication.php');
include('includes/header.php');
include('includes/navbar-top.php');

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
        <?php include('message.php'); ?>
        <div class="card">
            <div class="card-header">
                <h4>Edit POST
                    <a href="post-view" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?php
                    if(isset($_GET['id']))
                    {
                        $post_id = $_GET['id'];
                        $post_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
                        $post_query_res = mysqli_query($con, $post_query);

                        if(mysqli_num_rows($post_query_res) > 0)
                        {
                            $post_row = mysqli_fetch_array($post_query_res);
                            ?>

                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="post_id" value="<?= $post_row['id'] ?>">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <lable for="">Category List</lable>
                                        <?php
                                        $category = "SELECT * FROM categories WHERE status='0' ";
                                        $category_run = mysqli_query($con, $category);

                                        if (mysqli_num_rows($category_run) > 0){
                                        ?>
                                            <select name="category_id" class="form-control">
                                                <option value="">-- Select Category --</option>
                                                <?php
                                                foreach($category_run as $categoryitem)
                                                {    
                                                ?>   
                                                    <option value="<?= $categoryitem['id'] ?>" <?= $categoryitem['id'] == $post_row['category_id'] ? 'selected':'' ?> >
                                                        <?= $categoryitem['name'] ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        <?php
                                        }
                                        else{
                                            ?>
                                            <h6>No Category Available</h6>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    
                                        <div class="col-md-6 mb-3">
                                            <lable for="">Title</lable>
                                            <input type="text" name="name" value="<?= $post_row['name'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <lable for="">Slug</lable>
                                            <input type="text" name="slug" value="<?= $post_row['slug'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <lable for="">Description</lable>
                                            <textarea name="description" class="form-control" id="summernote"  rows="4"><?= $post_row['description'] ?></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <lable for="">Meta Title</lable>
                                            <input type="text" name="meta_title" value="<?= $post_row['meta_title'] ?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <lable for="">Meta Description</lable>
                                            <textarea name="meta_description" class="form-control" rows="4"><?= $post_row['meta_description'] ?></textarea>
                                        </div>
                                          <div class="col-md-6 mb-3">
                                            <lable for="">Schedule Post(Testing Phase input) </lable>
                                             <input type="datetime-local" name="meta_keyword" class="form-control" rows="4">
                                     </div>
                                        <div class="col-md-6 mb-3">
                                            <lable for="">Image</lable>
                                            <input type="hidden" name="old_image" value="<?= $post_row['image'] ?>"/>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <lable for="">Draft</lable>
                                            <input type="checkbox" name="status" <?= $post_row['status'] == '1' ? 'cehcked':'' ?> width="70px" height="70px" />
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="post_update" class="btn btn-primary">Update Post</button>
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
include('includes/footer.php')
?>