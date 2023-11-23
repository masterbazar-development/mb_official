<?php 
session_start();
include('config/dbcon.php');


if(isset($_POST['post_delete_btn']))
{

    $post_id = $_POST['post_delete_btn'];

    $check_img_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
    $img_res = mysqli_query($con, $check_img_query);
    $res_data = mysqli_fetch_array($img_res);
    $image = $res_data['image'];

    $query = "DELETE FROM posts WHERE id='$post_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
 
            if(file_exists('../images/blog/'.$image)){
                unlink('../images/blog/'.$image);;
            }
  
        $_SESSION['message'] = "Post Deleted Successfully";
        header('Location: post-view');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: post-view');
        exit(0);
    }

}

if(isset($_POST['post_update']))
{
    $post_id = $_POST['post_id'];

    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];

    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $old_filename =  $_POST['old_image'];
    $image = $_FILES['image']['name'];

    $update_filename = "";
    if($image != NULL)
    {        
        // Rename this image
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;

        $update_filename = $filename;
    }
    else
    {
        $update_filename = $old_filename;
    }

    $status = $_POST['status'] == true ? '1' : '0';
    echo "Status: " . $status . "<br>";

    $query = "UPDATE posts SET category_id='$category_id', name='$name', slug='$slug', description='$description', image='$update_filename', meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', status='$status' WHERE id='$post_id'";
            //   print_r($query);
            $query = "UPDATE posts SET category_id=?, name=?, slug=?, description=?, image=?, meta_title=?, meta_description=?, meta_keyword=?, status=? WHERE id=?";

            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, 'issssssssi', $category_id, $name, $slug, $description, $update_filename, $meta_title, $meta_description, $meta_keyword, $status, $post_id);
            $query_run = mysqli_stmt_execute($stmt); 
            
            if($query_run)
            {
                if($image != NULL)
                {  
                    if(file_exists('../images/blog/'.$old_filename)){
                        unlink("'../images/blog/'.$old_filename");
                    }
                    move_uploaded_file($_FILES['image']['tmp_name'], '../images/blog/'.$filename);
         
                }
                $_SESSION['message'] = "Post Edited Successfully";
                header('Location: post-view');
                exit(0);
            }
            else{
                $_SESSION['message'] = "Something Went Wrong!";
                header('Location: post-view');
                exit(0);
            }
}



if(isset($_POST['post_add']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $image = $_FILES['image']['name'];
    // $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = $image;

    $status = isset($_POST['status']) && $_POST['status'] == true ? '1' : '0';
     echo "Status: " . $status . "<br>";
    $created_at= date('Y-m-d H:i:s');
    $query = "INSERT INTO posts (category_id, name, slug, description, image, meta_title, meta_description, meta_keyword, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
 
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'isssssssi', $category_id, $name, $slug, $description, $filename, $meta_title, $meta_description, $meta_keyword, $status);
    $query_run = mysqli_stmt_execute($stmt);
    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], '../images/blog/'.$filename);
        $_SESSION['message'] = "Post Created Successfully";
        
        header('Location: post-add');
        exit(0);
    } else {
        echo "Error: " . mysqli_error($con);
    }    
}


// if(isset($_POST['post_add']))
// {
//         $category_id = $_POST['category_id'];

//         $name = $_POST['name'];
//         $slug = $_POST['slug'];
//         $description = $_POST['description'];
//         $meta_title = $_POST['meta_title'];
//         $meta_description = $_POST['meta_description'];
//         $meta_keyword = $_POST['meta_keyword'];

//         $image = $_FILES['image']['name'];
//         // Rename this image
//         $image_extension = pathinfo($image, PATHINFO_EXTENSION);
//         $filename = time().'.'.$image_extension;

        // $status = $_POST['status'] == true ? '1':'0';

        // $query = "INSERT INTO posts (category_id, name, slug, description, image, meta_title, meta_description, meta_keyword, status) VALUES
        //  ('$category_id', '$name', '$slug', '$description', '$image', '$meta_title', '$meta_description', '$meta_keyword', '$status')";

        //  $query_run = mysqli_query($con, $query);

//          if($query_run)
//          {
//             move_uploaded_file($_FILES['image']['tmp_name'], '../images/blog/'.$filename);
//             $_SESSION['message'] = "Post Created Successfully";
//             header('Location: post-view');
//             exit(0);
//          }
//          else
//          {
//             $_SESSION['message'] = "Something Went Wrong";
//             header('Location: post-add');
//             exit(0);
//          }
//     }


if(isset($_POST['category_delete']))
{
    $category_id = $_POST['category_delete'];
    // 2 delete
    $query = "DELETE FROM categories  WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Deleted Successfully";
        header('Location: category-view');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: category-view');
        exit(0);
    }


}


if(isset($_POST['category_update']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query= "UPDATE categories SET name='$name',slug='$slug',description='$description',navbar_status='$navbar_status',status='$status' WHERE id='$category_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Updated Successfully";
        header('Location: category-edit.php?id='.$category_id);
        exit(0);
    }
    else{
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: category-edit.php?id='.$category_id);
        exit(0);
    }

}

if(isset($_POST['category_add']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $main_category = $_POST['select-main'];

    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO categories (name,slug,description,main_category,navbar_status,status) VALUES ('$name','$slug','$description','$main_category','$navbar_status','$status') ";

    $query_run = mysqli_query($con, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Category Added Successfully";
        header('Location: category-add');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: category-add');
        exit(0);
    }

}


if(isset($_POST['add_user']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0';

    $query = "INSERT INTO users (fname,lname,email,password,role_as,status) VALUES ('$fname','$lname','$email','$password', '$role_as', '$status') ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Admin or User Added Successfully";
        header('Location: view-register');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: view-register');
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE users SET fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as', status='$status'
                     WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] ="Updated Successfully";
        header('Location: view-register');
        exit(0);
    }

}
// object oriented approach to inser data
// if(isset($_POST['testimonial_add'] ))
// {
//     $client_name = $_POST['name'];
//     $image = $_FILES['image']['name'];
//     $short_comment = $_POST['com-head'];
//     $comment = $_POST['comment'];
//     $status = $_POST['status'] == true ? '1':'0';
//     $sql = "INSERT INTO testimonials (client_name, comment_head, image_url, status) VALUES (?, ?, ?, ?)";
//     move_uploaded_file($_FILES['image']['tmp_name'], 'testimonial/client-image/'.$image);
//     $testimonial =$con->prepare($sql);
//     // Bind parameters ssss defines the string values 
//     $testimonial->bind_param("ssss", $client_name, $short_comment, $image, $status);
//     if($testimonial->execute()){
//         $_SESSION['message'] ="Testimonial Added Successfully";
//          header('Location: testimonial/testimonial-add');
//     }
//     $testimonial->close();
//     $con->close();
// }
if(isset($_POST['faq_add'] )){
        $category= $_POST['category'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $order= $_POST['order'];
        $status = $_POST['status'] == true ? '1':'0';
        $sql = "INSERT INTO faq (category, question, answer,order_num, status) VALUES (?, ?, ?, ?,?)";
        $faq =$con->prepare($sql);
        // Bind parameters ssss defines the string values 
        $faq->bind_param("sssss", $category, $question, $answer,$order, $status);
        if($faq->execute()){
            $_SESSION['message'] ="FAQ Added Successfully";
             header('Location: faq/faq-add');
        }
        $faq->close();
        $con->close();
    }
?>