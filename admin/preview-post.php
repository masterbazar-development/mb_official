<?php
include('config/dbcon.php');
$currentUrl =  $_SERVER['REQUEST_URI'];
$path = parse_url($currentUrl, PHP_URL_PATH);
$lastUrlSegment = pathinfo($path, PATHINFO_BASENAME);

 if(isset($_GET['title'])){
    $slug = mysqli_real_escape_string($con, $_GET['title']);

    $meta_posts = "SELECT slug,meta_title,meta_description,meta_keyword FROM posts WHERE slug='$lastUrlSegment'";
    $meta_posts_run = mysqli_query($con, $meta_posts);

    if(mysqli_num_rows($meta_posts_run) > 0){

        $metaPostItem = mysqli_fetch_array($meta_posts_run);
        $post_title = $metaPostItem['meta_title'];
        $meta_description = $metaPostItem['meta_description'];
        $meta_keywords = $metaPostItem['meta_keyword'];

    }
}
    // echo $post_title;
    //     echo $meta_description;
  define('TITLE',  $post_title);
  define('IMAGE','');
  define('DESCRIPTION', $meta_description);
  define('KEYWORDS', $meta_keywords);
  ?>
  <?php
  

$currentTitle = 'Current Blog Title'; // Replace with the actual title of the current blog
 $currentUrl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 include('../heroheader.php');
?>

<?php
 if(isset($_GET['title'])){
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
    include('../blog/blogleftsidebar.php');
    ?>
    <!--blog content start From Here-->
    <div class="flex flex-col lg:flex lg:flex-row gap-16">
        <div class="blogcontent order-1 lg:order-2" id="contentSection">
            <img src="../images/blog/<?= $postItems['image'];?>" class="">
            <h1 class="text-2xl lg:text-3xl 2xl:text-4xl text-[#2e2a2a] font-oswald font-semibold pt-8 blog-title"><?=$postItems['name']?></h1>
            <div class="text-[#282828]  py-3 font-rubik text-lg 2xl:text-xl font-medium">
            <?=$postItems['description']?>
            </div>
        </div>
        <!--rightsidebar-->
        <?php
        include('../blog/blogrightsidebar.php');
        ?>
    </div>
            <?php
        }
    }
 }
?>
<script>
     (function () {
  if (window.matchMedia('(min-width: 600px)').matches) {
    window.addEventListener('scroll', function () {
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
</section>
<?php
include('../footer.php');
?>


