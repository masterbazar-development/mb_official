<?php
include('../mb-admin/config/dbcon.php');
$currentUrl =  $_SERVER['REQUEST_URI'];
$path = parse_url($currentUrl, PHP_URL_PATH);
$lastUrlSegment = pathinfo($path, PATHINFO_BASENAME);
// Replace 'your_directory_or_file' with the path to the directory or file you want to get the absolute path for.
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
if (isset($_GET['title'])) {
  $slug = mysqli_real_escape_string($con, $_GET['title']);
  $meta_posts = "SELECT slug,meta_title,meta_description,image,meta_keyword,category_id FROM posts WHERE slug='$lastUrlSegment'";
  $meta_posts_run = mysqli_query($con, $meta_posts);

  if (mysqli_num_rows($meta_posts_run) > 0) {

    $metaPostItem = mysqli_fetch_array($meta_posts_run);
    $post_title = $metaPostItem['meta_title'];
    $meta_description = $metaPostItem['meta_description'];
    $meta_keywords = $metaPostItem['meta_keyword'];
    $og_img = $metaPostItem['image'];
    $category_id = $metaPostItem['category_id'];
  }
}
$og_image = 'https://masterbazar.com/images/blog/' . $og_img;

// echo $post_title;
//  echo $meta_description;
define('TITLE',  $post_title);
define('DESCRIPTION', $meta_description);
//   define('KEYWORDS', $meta_keywords);
//   define('IMAGE', $og_image);
?>
<?php

$currentTitle = 'Current Blog Title'; // Replace with the actual title of the current blog
 $currentUrl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 include('../components/header.php');
 include('../mb-admin/config/dbcon.php');
 ?>
<?php
if (isset($_GET['title'])) {
  $slug = mysqli_real_escape_string($con, $_GET['title']);

  $posts = "SELECT * FROM posts WHERE slug='$slug'";
  $posts_run = mysqli_query($con, $posts);

    if(mysqli_num_rows($posts_run) > 0){
        foreach($posts_run as $postItems){
            ?>
<p class="pt-2"></p>
<section class="bg-[#ffffff] font-rubik px-5 sm:px-8 md:px-28 lg:px-20 xl:px-[10%] 2xl:px-[15%] pt-10 md:pt-20 pb-28 lg:w-[100%]">
    <!--leftsidebar-->
    <?php
    // include('blog/r-sidebar.php');
    ?>
    <!--blog content start From Here-->
    <div class="flex flex-col lg:flex lg:flex-row gap-10">
        <div class="blogcontent order-1 lg:w-[70%]" id="contentSection">
        <img src="../assets/client/images/blog/<?= $postItems['image'];?>" class="">
            <h1 class="text-2xl lg:text-3xl 2xl:text-4xl text-[#2e2a2a] font-oswald font-semibold pt-8 blog-title"><?=$postItems['name']?></h1>
            <div class="text-[#282828]  py-3 font-rubik text-lg 2xl:text-xl font-medium">
            <?=$postItems['description']?>
            </div>
        </div>
        <!--rightsidebar-->
        <div class="order-2 lg:w-[34%]">
        <?php
        include('../blog/r-sidebar.php');
        ?>
    </div>
    </div>


  <?php
    }
  } else {
    header('location:404');
    exit;
  }
}

  ?>
      </section>
      <script>
        (function() {
          if (window.matchMedia('(min-width: 600px)').matches) {
            window.addEventListener('scroll', function() {
              var fixedElement = document.getElementById('fixedElement');
              var sectionElement = document.getElementById('contentSection');
              var windowHeight = window.innerHeight;
              var sectionHeight = sectionElement.offsetHeight;

              // Specify the ratio (from 0 to 1) to determine the specific point based on window height or section length
              var ratio = 0.8; // Adjust this value as needed

              var specificPoint = sectionElement.offsetTop + (sectionHeight * ratio);

              if (window.pageYOffset >= specificPoint) {
                fixedElement.style.display = 'none';
              } else {
                fixedElement.style.display = 'flex';
              }
            });
          }
        })();
      </script>

      <?php include('../components/footer.php'); ?>