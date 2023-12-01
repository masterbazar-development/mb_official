<?php
include('authentication.php');
include('includes/header.php');
include('includes/navbar-top.php');
// Fetch scheduled posts that are ready to be published
date_default_timezone_set('Asia/Kolkata');
$current_datetime = date('Y-m-d H:i:s');
// greater than means future posts fetches
$sql = "SELECT * FROM posts WHERE meta_keyword >='$current_datetime' AND status = 1";  
$result = $con->query($sql);
print_r($result->num_rows);
if ($result->num_rows > 0) {
    // Loop through the fetched scheduled posts and publish each post
    while ($row = $result->fetch_assoc()) {
        // Mark the post as published in the database
        $post_id = $row['id'];
         $publishDatetime = $row['meta_keyword'];
        if ($publishDatetime >= $current_datetime) {
          $update_sql = "UPDATE `posts` SET status = 0 WHERE id = '$post_id'";
        $con->query($update_sql);
        }
        if($con->query($update_sql)){
            echo "Published";
        }else{
            echo "Some Problem";
        }
    }
}else{
  echo  "no schedule post";
}
$con->close();
echo "success";
?>
