<?php
define('TITLE', 'Blog | Digital Marketing, Development, Latest Insights, and Much More | Master Bazar');
define('DESCRIPTION', 'Master Bazar Blogs & Technology News - Get ready for the latest news and blog posts about technology along with recent updates on web development, app development and digital marketing.');
include('../components/header.php');
include('../components/loader.php');
include('../mb-admin/config/dbcon.php');
?>
<?php include('../components/navmenu.php'); ?>

<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 -right-32">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<section role="banner">
  <div class="max-w-full  mx-[10vw]">
    <?php include('../components/heroheader.php'); ?>

  </div>
  <div class="py-20 px-5 sm:px-8 md:px-28 lg:px-20 xl:px-[14%] 2xl:px-[15%] text-black">
    <div class="lg:flex gap-20">
      <div class="lg:w-[70%] pt-14">
        <?php
        $post = "SELECT * FROM posts WHERE status='0' ORDER BY posts.id DESC LIMIT 1 offset 0";

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
            <div class="image-container rounded-md">
              <div class="img-wrapper ">
                <a href="../blogs/<?= $results['slug'] ?>" class="inline-block overflow-hidden">
                  <img src="../assets/client/images/blog/<?= $results['image'] ?>" class="w-full rounded-md transition-all duration-700 ease-in-out hover:scale-[1.01]">
                </a>
              </div>
              <div class="p-3 md:p-6">
                <a href="../blogs/<?= $results['slug'] ?>">
                  <h1 class=" text-head text-2xl font-semibold transition duration-150 hover:underline hover:underline-offset-4 target"><?php echo  $results['name']; ?></h1>
                </a>
                <a href="../blogs/<?= $results['slug'] ?>">
                  <p class=" text-gray-800 text0-md lg:text-lg pt-3 cursor-text font-livvic"><?php // echo $first50Words; 
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
      <div class="lg:w-[34%] lg:flex lg:flex-col lg:justify-start text-gray-800 pt-14">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script defer>
  var loadingImages = false;
  var hasMoreImages = true;

  document.addEventListener('DOMContentLoaded', function () {
    loadPosts();
    handleScroll();

    window.addEventListener('scroll', function () {
      handleScroll();
    });
  });

  function handleScroll() {
    if (loadingImages) return;

    var scrollThreshold;
    if (window.matchMedia('(max-width: 1025px)').matches) {
      scrollThreshold = 350;
    } else if (window.matchMedia('(min-width: 1024px)').matches) {
      scrollThreshold = 350;
    } else if (window.matchMedia('(min-width: 768px)').matches) {
      scrollThreshold = 1600;
    } else {
      scrollThreshold = 1600;
    }

    if (window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - scrollThreshold) {
      loadPosts();
    }
  }

  function loadPosts() {
    if (loadingImages || !hasMoreImages) return;
    loadingImages = true;

    document.getElementById('loadingIndicator').style.display = 'block';

    var currentPage = parseInt(document.getElementById('currentPage').value);

    fetch('load-more-images', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: 'page=' + currentPage,
    })
      .then(response => response.json())
      .then(data => {
        loadingImages = false;
        document.getElementById('loadingIndicator').style.display = 'none';

        // Update the flag indicating whether more images are available
        hasMoreImages = data.hasMoreImages;

        // Append new posts to the container with fade-in effect
        var imageContainer = document.getElementById('imageContainer');
        var newPosts = document.createRange().createContextualFragment(data.posts);
        newPosts.childNodes.forEach(post => {
          post.style.opacity = 0;
          imageContainer.appendChild(post);
          fadeIn(post);
        });

        // Update the current page only if more images are available
        if (hasMoreImages) {
          document.getElementById('currentPage').value = currentPage + 1;
        }

        // Check if more images are available
        if (!hasMoreImages) {
          window.removeEventListener('scroll', handleScroll);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        loadingImages = false;
        document.getElementById('loadingIndicator').style.display = 'none';
      });
  }

  function fadeIn(element) {
    var opacity = 0;
    var interval = setInterval(function () {
      if (opacity < 1) {
        opacity += 0.6;
        element.style.opacity = opacity;
      } else {
        clearInterval(interval);
      }
    }, 100);
  }
</script>



<hr class="border-t-2 border-gradientdivide">
<?php include('../components/footer.php'); ?>