<?php
define('TITLE', 'Blog | Digital Marketing, Development, Latest Insights, and Much More | Master Bazar');
define('DESCRIPTION', 'Master Bazar Blogs & Technology News - Get ready for the latest news and blog posts about technology along with recent updates on web development, app development and digital marketing.');
include('../components/header.php');
include('../components/loader.php');
include('../mb-admin/config/dbcon.php');
?>
<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 -right-32">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<section role="banner">
  <div class="max-w-full  mx-[10vw]">
    <?php include('../components/heroheader.php'); ?>
    <?php include('../components/menu.php');
    ?>
  </div>
  <div class="py-20 px-5 sm:px-8 md:px-28 lg:px-20 xl:px-[14%] 2xl:px-[15%] text-black">
    <div class="lg:flex gap-20">
      <div class="lg:w-[70%]">
        <?php
        $post = "SELECT * FROM posts WHERE status='0' ORDER BY posts.id DESC LIMIT 1 offset 1";

        $query = mysqli_query($con, $post);

        $query_run = mysqli_num_rows($query);

        ?>
        <?php
        if ($post) {
          while ($results = mysqli_fetch_assoc($query)) {
            $fullText = $results['description'];

            $words = explode(' ', $fullText);
            $first50Words = implode(' ', array_slice($words, 0, 50));


        ?>
            <p class=" text-gray-800"><?php // echo $first50Words; 
                                      ?></p>
            <div class="image-container trigger baksablog rounded-md">
              <div class="img-wrapper">
                <a href="../blogs/<?= $results['slug'] ?>">
                  <img src="../assets/client/images/blog/<?= $results['image'] ?>" class="w-full">
                </a>
              </div>
              <div class="p-3 md:p-6">
                <a href="../blogs/<?= $results['slug'] ?>">
                  <h1 class=" text-gray-800 text-xl xl:text-2xl font-medium transition duration-150 hover:underline hover:underline-offset-4 target"><?php echo  $results['name']; ?></h1>
                </a>
                <a href="../blogs/<?= $results['slug'] ?>">
                  <p class=" text-gray-800 text0-md lg:text-lg pt-3 cursor-text"><?php // echo $first50Words; 
                                                                                  ?><a href="../blogs/<?= $results['slug'] ?>"><span>
                        Read More
                      </span>
                  </p>
                </a>
              </div>
            </div>
        <?php        }
        }
        ?>
        <div>
        </div>
        <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 py-20 gap-10" id="imageContainer">

          <?php
          $results = null; //  $results is null, which causes the issue
          if (!is_null($results) && (is_array($results) || is_object($results))) {
            foreach ($results as $result) : ?>

          <?php
            endforeach;
          } else {
          }
          ?>
        </div>
        <div id="loadingIndicator" style="display: none;">
          <p class=" text-gray-800 flex text-lg">
            loading... <img src="../assets/client/images/blog/loader.png" class="animate-spin">
          </p>
        </div>
        <form id="paginationForm">
          <input type="hidden" name="page" value="1" id="currentPage">
          <!-- Add any other form fields if required -->
        </form>
      </div>

      <!--sidebar short-->
      <div class="lg:w-[34%] lg:flex lg:flex-col lg:justify-start text-gray-800 ">
        <?php include('r-sidebar.php'); ?>
        <!--sidebar short end-->
      </div>
    </div>
</section>
<?php include('../components/cursor.php'); ?>
<script>
  function show() {
    document.querySelector('.hamburger').classList.
    toggle('open')
    document.querySelector('.navigation').classList.
    toggle('active')
  }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script defer>
  var loadingImages = false;
  var hasMoreImages = true;

  $(document).ready(function() {
    loadPosts();

    // Function to handle the scroll event based on the screen width
    function handleScroll() {
      if (window.matchMedia('(max-width: 1380px)').matches) {
        // For screens wider than or equal to 1380px, use the original scroll behavior
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 350) {
          if (hasMoreImages && !loadingImages) {
            var currentPage = parseInt($('#currentPage').val());
            $('#currentPage').val(currentPage + 1);
            loadPosts();
          }
        }
      } else if (window.matchMedia('(max-width: 1280px)').matches) {
        // For screens narrower than 768px, use a different scroll behavior
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 400) {
          if (hasMoreImages && !loadingImages) {
            var currentPage = parseInt($('#currentPage').val());
            $('#currentPage').val(currentPage + 1);
            loadPosts();
          }
        }
      } else if (window.matchMedia('(min-width: 768px)').matches) {
        // For screens narrower than 768px, use a different scroll behavior
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 1600) {
          if (hasMoreImages && !loadingImages) {
            var currentPage = parseInt($('#currentPage').val());
            $('#currentPage').val(currentPage + 1);
            loadPosts();
          }
        }
      } else {
        // For screens narrower than above
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 1600) {
          if (hasMoreImages && !loadingImages) {
            var currentPage = parseInt($('#currentPage').val());
            $('#currentPage').val(currentPage + 1);
            loadPosts();
          }
        }
      }
    }

    // Call the handleScroll function on initial page load
    handleScroll();

    // Attach the handleScroll function to the scroll event
    $(window).scroll(function() {
      handleScroll();
    });
  });

  function loadPosts() {
    if (loadingImages) return;
    loadingImages = true;

    $('#loadingIndicator').show();

    $.ajax({
      url: 'load-more-images.php',
      type: 'POST',
      data: $('#paginationForm').serialize(),
      dataType: 'json',
      success: function(response) {
        loadingImages = false;
        $('#loadingIndicator').hide();

        // Append new posts to the container
        $('#imageContainer').append(response.posts);

        // Update the flag indicating whether more images are available
        hasMoreImages = response.hasMoreImages;

        // Check if more images are available
        if (!hasMoreImages) {
          $(window).off('scroll'); // Remove scroll event listener
        }
      },
      error: function(seerrorinconsole) {
        loadingImages = false;
        $('#loadingIndicator').hide();
        console.log('Error:', seerrorinconsole.responseText);
      }
    });
  }
</script>
<hr class="border-t-2 border-gradientdivide">
<?php include('../components/footer.php'); ?>