<?php include('../components/header.php'); ?>
<?php include('../components/loader.php'); ?>
<?php include('../components/navmenu.php'); ?>




<!-- Hero Banner Section -->
<section role="banner" id="targetDiv" class="bg-gradient-to-r from-slate-200 to-white lg:h-[90vh] w-screen overflow-hidden">
  <div class="max-w-full  mx-[10vw]">
    <?php include('../components/heroheader.php'); ?>

    <div class="lg:flex grid items-center justify-between 2xl:gap-16 gap-12 my-12 lg:my-auto">
      <div class="lg:w-[50%] font-medium order-2 lg:order-1 2xl:py-20 flex flex-col justify-center">
        <h1 class="text-left 2xl:text-7xl text-5xl text-head font-extrabold">About Us</h1>
        <p class="text-lg font-livvic font-normal mt-5 text-[#334155] w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime quisquam quibusdam vitae architecto voluptas commodi? Nisi illo omnis rerum sapiente sit, dolores eum, excepturi mollitia, illum facilis eaque. Molestias, ex laboriosam.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></p>
      </div>
      <div class="w-full lg:w-[50%] wrapper order-1 lg:order-2 relative flex justify-center items-center lg:h-[80vh]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/about-us.png" alt="" class="hover:scale-[1.04] transition duration-500 ease-in-out">
      </div>
    </div>
  </div>
</section>

<!-- FAQs Section Starts From Here -->
<section class="lg:mt-28 z-[40] bg-white py-20 px-8">
  <h4 class="lg:text-center text-5xl mb-5 text-head font-black">Gallery</h4>
  <div class="flex justify-center mb-12">
    <p class="text-base lg:text-lg font-livvic font-normal text-[#334155] max-w-7xl lg:text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime quisquam quibusdam vitae architecto voluptas commodi? Nisi illo omnis rerum sapiente sit, dolores eum, excepturi mollitia, illum facilis eaque. Molestias, ex laboriosam.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></h2>
  </div>
  <div class="text-lg mx-[10vw] max-w-full">
    <div class="lg:grid lg:grid-cols-4 gap-4">
      <div class="col-span-1">
        <div class="justify-center gap-4 grid lg:grid-cols-1 grid-cols-2 items-center">
          <?php
          include('../mb-admin/config/dbcon.php');
          $category = "SELECT * FROM categories WHERE status='0' AND main_category='GALLERY'";
          $category_run = mysqli_query($con, $category);
          // print_r($category_run);
          if (mysqli_num_rows($category_run) > 0) {
            foreach ($category_run as $categoryitem) :
          ?>
              <p class="faq-cat  category-item" data-category-id="<?php echo $categoryitem['id'] ?>"><?php echo $categoryitem['name'] ?></p>
          <?php endforeach;
          } ?>
        </div>
      </div>
      <div class="col-span-3" id="galleryContainer">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4" id="galleryImages">
          <!-- images loaded here -->
        </div>
        <div id="paginationContainer" class="text-center flex justify-center mt-6">
          <!-- Pagination loaded here -->
        </div>
      </div>
      <div id="gallerymodal" class="modal hidden fixed z-[1000] pt-36 left-0 top-0 w-full h-full overflow-auto bg-[#000000d2]">
        <span class="border-2 border-white rounded-full px-[1.1rem] py-[.1rem] close absolute top-10 right-[2rem] text-6xl text-white font-bold cursor-pointer opacity-75 hover:opacity-100" onclick="closeModal()">&times;</span>
        <img id="modalImage" class="modal-content max-w-[80%] max-h-[80%] m-auto block opacity-0 transition-all duration-300 ease-in-out">
        <div class="absolute font-semibold text-white  top-10 inset-x-10 flex justify-center space-x-10">
          <button onclick="zoomIn()" class="opacity-75 hover:opacity-100">Zoom In</button>
          <button onclick="zoomOut()" class="opacity-75 hover:opacity-100">Zoom Out</button>

        </div>
        <button class="modal-btn absolute top-[50%] min-w-fit left-1 sm:left-10 text-white text-5xl opacity-75 hover:opacity-100" onclick="previousImage()">&lt;</button>
        <button class="modal-btn absolute top-[50%] min-w-fit right-1 sm:right-10 text-white text-5xl opacity-75 hover:opacity-100" onclick="nextImage()">&gt;</button>
      </div>
    </div>
  </div>

</section>
<!-- FAQs Section Ends Here -->

<!-- Our Team Section -->
<section class="mb-14 z-[40] bg-white lg:pb-20 px-8">
  <h4 class="lg:text-center text-5xl mb-5 text-head font-black">Our Team</h4>
  <div class="flex justify-center mb-12">
    <p class="text-base lg:text-lg font-livvic font-normal text-[#334155] max-w-7xl lg:text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime quisquam quibusdam vitae architecto voluptas commodi? Nisi illo omnis rerum sapiente sit, dolores eum, excepturi mollitia, illum facilis eaque. Molestias, ex laboriosam.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></h2>
  </div>
  <!-- team -->
  <div class="text-lg mx-[10vw] max-w-full">
    <div class="lg:grid lg:grid-cols-4 gap-4">
      <div class="col-span-1">
        <div class="justify-center gap-4 grid lg:grid-cols-1 grid-cols-2 items-center">
          <?php
          include('../mb-admin/config/dbcon.php');
          $category = "SELECT * FROM categories WHERE status='0' AND main_category='TEAM'";
          $category_run = mysqli_query($con, $category);
          // print_r($category_run);
          if (mysqli_num_rows($category_run) > 0) {
            foreach ($category_run as $categoryitem) :
          ?>
              <p class="faq-cat category-item-team" data-category-id="<?php echo $categoryitem['id'] ?>"><?php echo $categoryitem['name'] ?></p>
          <?php endforeach;
          } ?>
        </div>
      </div>
      <div class="col-span-3" id="teamContainer">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4" id="teamImages">
          <!-- images loaded here -->
        </div>
        <div id="teampaginationContainer" class="text-center flex justify-center mt-6">
          <!-- Pagination loaded here -->
        </div>
      </div>
      <div id="teammodal" class="modal hidden fixed z-[1000] pt-36 left-0 top-0 w-full h-full overflow-auto bg-[#000000d2]">
        <span class="close absolute top-10 right-[2rem] text-6xl text-white font-bold cursor-pointer" onclick="closeModal()">&times;</span>
        <img id="teammodalImage" class="modal-content max-w-[80%] max-h-[80%] m-auto block opacity-0 transition-all duration-300 ease-in-out">
      </div>
    </div>
  </div>
  <!-- team -->
</section>
<script async>
  
  document.addEventListener('DOMContentLoaded', function() {
    // Load initial images on page load with custom id like 16 
    const dcategoryId = "16";
    const categoryIditem = document.querySelector(`.category-item[data-category-id="${dcategoryId}"]`);
    if (categoryIditem) {
      categoryIditem.classList.add('active');
    }
    loadImages(1, dcategoryId);
  });
  // Event listener for category items
  document.addEventListener('click', function(event) {
    if (event.target.classList.contains('category-item')) {
      const categoryId = event.target.dataset.categoryId;
      const categoryItems = document.querySelectorAll('.category-item');
      categoryItems.forEach(item => item.classList.remove('active'));
      event.target.classList.add('active');
      loadImages(1, categoryId); // Load images with the selected category
    }
  });

  function loadImages(page, categoryId) {
    const galleryContainer = document.getElementById('galleryContainer');
    if (!categoryId) {
      categoryId = document.querySelector('.category-item.active').dataset.categoryId;
    }
    // Include categoryId in the fetch URL if 
    const fetchUrl = categoryId ? `load_images?page=${page}&category=${categoryId}` : `load_images?page=${page}`;
    console.log(fetchUrl);
    fetch(fetchUrl)
      .then(response => response.json())
      .then(data => {
        displayImages(data.images);

        displayPagination(data.totalPages, page);
      })
      .catch(error => {
        console.error('Error fetching images:', error);
      });
  }

  function displayImages(images) {
    const galleryImages = document.getElementById('galleryImages');
    galleryImages.innerHTML = '';

    images.forEach(item => {
      const imageElement = document.createElement('div');
      imageElement.innerHTML = `
            <div class="image-container" onclick="openModal('${item.url}', '${item.alt}','${item.index}')">
                <div class="img-wrapper inline-block overflow-hidden">
                    <img src="${item.url}" alt="${item.alt}" class="rounded-md cursor-pointer transition-all duration-700 ease hover:scale-[1.1]">
                </div>
            </div>
        `;
      galleryImages.appendChild(imageElement);
    });
  }

  function displayPagination(totalPages, currentPage) {
    const paginationContainer = document.getElementById('paginationContainer');
    paginationContainer.innerHTML = '';

    for (let i = 1; i <= totalPages; i++) {
      const pageLink = `
    <a href="javascript:void(0)" class="pagination-link ${i === currentPage ? 'active-gallery' : ''} text-sm px-4 py-[0.65rem] text-gray-400 mr-[0.1rem] bg-white rounded-full font-livvic font-msemibold border border-[.08rem] border-gray-300 hover:bg-gray-200 hover:text-gray-700" data-page="${i}" onclick="loadImages(${i})">
      ${i}
    </a>
  `;
      paginationContainer.insertAdjacentHTML('beforeend', pageLink);
    }
  }
  var currentImageIndex = 0;
  var imagesArray = [];

  function openModal(imagesrc, alt_tag, index) {
    var modal = document.getElementById('gallerymodal');
    var modalImage = document.getElementById('modalImage');
    modal.style.display = 'block';
    modalImage.src = imagesrc;
    modalImage.alt = alt_tag;
    modalImage.classList.add('opacity-100');
    modalImage.style.transform = 'scale(1)';
    // Populate the imagesArray with all image sources
    var galleryImages = document.querySelectorAll('.image-container img');
    imagesArray = Array.from(galleryImages).map((img, i) => ({
      src: img.src,
      alt: img.alt,
      index: i
    }));
    currentImageIndex = 0;
    console.log(currentImageIndex);
  }

  function closeModal() {
    document.getElementById('gallerymodal').style.display = 'none';
    modalImage.classList.remove('opacity-100');
  }

  function zoomIn() {
    var modalImage = document.getElementById('modalImage');
    var currentTransform = modalImage.style.transform;
    var newTransform = 'scale(1.4)'; // You can adjust the scale factor as needed
    modalImage.style.transform = currentTransform + ' ' + newTransform;
  }

  function zoomOut() {
    var modalImage = document.getElementById('modalImage');
    var currentTransform = modalImage.style.transform;
    var newTransform = 'scale(0.6)'; // You can adjust the scale factor as needed
    modalImage.style.transform = currentTransform + ' ' + newTransform;
  }

  function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % imagesArray.length;
    console.log(currentImageIndex)
    updateModalImage();
  }

  function previousImage() {
    currentImageIndex = (currentImageIndex - 1 + imagesArray.length) % imagesArray.length;
    updateModalImage();
  }

  function updateModalImage(imagesrc, alt_tag, index) {
    var modalImage = document.getElementById('modalImage');
    if (imagesArray.length > 0 && currentImageIndex >= 0 && currentImageIndex < imagesArray.length) {
      modalImage.src = imagesArray[currentImageIndex].src;
      modalImage.alt = imagesArray[currentImageIndex].alt;
    }

  }
  //---------------------------------------- team script-----------------------------
 
</script>
<script>
   (function() {
 document.addEventListener('DOMContentLoaded', function() {
    // Load initial images on page load with custom id like 16 
    const team_dcategoryId = "21";
    const teamcategoryIditem = document.querySelector(`.category-item-team[data-category-id="${team_dcategoryId}"]`);
    if (teamcategoryIditem) {
      teamcategoryIditem.classList.add('active');
    }
    loadImages(1, team_dcategoryId);
  });
  // Event listener for category items
  document.addEventListener('click', function(event) {
    if (event.target.classList.contains('category-item-team')) {
      const teamcategoryId = event.target.dataset.teamcategoryId;
      const teamcategoryItems = document.querySelectorAll('.category-item-team');
      teamcategoryItems.forEach(item => item.classList.remove('active'));
      event.target.classList.add('active');
      loadImages(1, teamcategoryId); // Load images with the selected category
    }
  });

  function loadImages(teamPage, teamcategoryId) {
    const teamContainer = document.getElementById('teamContainer');
    if (!teamcategoryId) {
      teamcategoryId = document.querySelector('.category-item-team.active').dataset.teamcategoryId;
    }
    // Include categoryId in the fetch URL if 
    const fetchUrlteam = teamcategoryId ? `load_images_team?page=${teamPage}&category_team=${teamcategoryId}` : `load_images_team?page=${teamPage}`;
    console.log(fetchUrlteam);
    fetch(fetchUrlteam)
      .then(response => response.json())
      .then(data => {
        displayImages(data.team);

        displayPagination(data.totalPages, teamPage);
      })
      .catch(error => {
        console.error('Error fetching images:', error);
      });
  }

  function displayImages(team) {
    const teamImages = document.getElementById('teamImages');
    teamImages.innerHTML = '';

    team.forEach(item => {
      const imageElement = document.createElement('div');
      imageElement.innerHTML = `
            <div class="image-container" onclick="openModal('${item.url}', '${item.alt}')">
                <div class="img-wrapper inline-block overflow-hidden">
                    <img src="${item.url}" alt="${item.alt}" class="rounded-md cursor-pointer transition-all duration-700 ease hover:scale-[1.1]">
                </div>
            </div>
        `;
      teamImages.appendChild(imageElement);
    });
  }

  function displayPagination(totalPages, currentPage) {
    const paginationContainer = document.getElementById('teampaginationContainer');
    paginationContainer.innerHTML = '';

    for (let i = 1; i <= totalPages; i++) {
      const pageLink = `
    <a href="javascript:void(0)" class="pagination-link ${i === currentPage ? 'active-team' : ''} text-sm px-4 py-[0.65rem] text-gray-400 mr-[0.1rem] bg-white rounded-full font-livvic font-msemibold border border-[.08rem] border-gray-300 hover:bg-gray-200 hover:text-gray-700" data-page="${i}" onclick="loadImages(${i})">
      ${i}
    </a>
  `;
      paginationContainer.insertAdjacentHTML('beforeend', pageLink);
    }
  }

  function openModal(imagesrc, alt_tag) {
    var modal = document.getElementById('teammodal');
    var modalImage = document.getElementById('teammodalImage');
    modal.style.display = 'block';
    modalImage.src = imagesrc;
    modalImage.alt = alt_tag;
    modalImage.classList.add('opacity-100');
  }

  function closeModal() {
    document.getElementById('teammodal').style.display = 'none';
    modalImage.classList.remove('opacity-100');
  }
})();
</script>

<?php include('../components/cursor.php'); ?>
<?php include('../components/footer.php'); ?>