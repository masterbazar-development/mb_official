<?php include('../components/header.php'); ?>
<?php include('../components/loader.php'); ?>
<?php include('../components/navmenu.php'); ?>

<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 -right-32">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<?php include('../components/menu.php'); ?>
<!-- Navigation ends Here -->

<!-- Hero Banner Section -->
<section role="banner" id="targetDiv" class="bg-gradient-to-r from-slate-200 to-white lg:h-[90vh] w-screen overflow-hidden">
    <div class="max-w-full  mx-[10vw]">
<?php  include('../components/heroheader.php'); ?>

    <div class="lg:flex grid items-center justify-between 2xl:gap-16 gap-12 my-12 lg:my-auto">
        <div class="font-medium order-2 lg:order-1 2xl:py-20 flex flex-col justify-center">
            <h1 class="text-left 2xl:text-7xl text-5xl text-head font-extrabold">About Us</h1>
            <p class="text-lg font-livvic font-normal mt-5 text-[#334155] w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime quisquam quibusdam vitae architecto voluptas commodi? Nisi illo omnis rerum sapiente sit, dolores eum, excepturi mollitia, illum facilis eaque. Molestias, ex laboriosam.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></p>
        </div>
        <div class="wrapper order-1 lg:order-2 w-full relative flex justify-center items-center lg:h-[80vh]">
           <img src="<?php echo $mainUrl; ?>assets/client/images/masterbazar_logo.png" alt="" class="w-[50%]">
        </div>
    </div>
</div>
</section>

<!-- FAQs Section Starts From Here -->
<section class="lg:mt-28 z-[40] bg-white py-20 px-8">
    <h4 class="text-center text-5xl mb-5 text-head font-black">Gallery</h4>
    <div class="flex justify-center mb-12">
    <p class="text-lg font-livvic font-normal text-[#334155] max-w-7xl text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime quisquam quibusdam vitae architecto voluptas commodi? Nisi illo omnis rerum sapiente sit, dolores eum, excepturi mollitia, illum facilis eaque. Molestias, ex laboriosam.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></h2></div>
    <div class="text-lg max-w-7xl mx-auto">
        <div class="my-5 lg:flex justify-center grid lg:grid-cols-4 grid-cols-2 items-center gap-5">
            <p class="bg-blue text-white rounded-md p-3 font-medium cursor-pointer">Websites</p>
            <p class="faq-cat">Festivals</p>
            <p class="faq-cat">Birthdays</p>
            <p class="faq-cat">Lorem Lysem</p>
        </div>
        <div class="space-y-6">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4">

              <div class="">
                <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>
              

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

            </div>
        </div>
  
        <div class="justify-center mt-14 flex">
        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
          <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Previous</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd"></path>
</svg>
          </a>
          <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
          <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-blue px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue">1</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
          <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
          <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
          <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
          <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Next</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
</svg>
          </a>
        </nav>
        </div>
        
    </div>
</section>
<!-- FAQs Section Ends Here -->

<!-- Our Team Section -->
<section class="mb-14 z-[40] bg-white lg:pb-20 px-8">
<h4 class="text-center text-5xl mb-5 text-head font-black">Our Team</h4>
<div class="flex justify-center mb-12">
    <p class="text-lg font-livvic font-normal text-[#334155] max-w-7xl text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime quisquam quibusdam vitae architecto voluptas commodi? Nisi illo omnis rerum sapiente sit, dolores eum, excepturi mollitia, illum facilis eaque. Molestias, ex laboriosam.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></h2></div>
<div class="text-lg max-w-7xl mx-auto">
  <div class="lg:grid lg:grid-cols-4 gap-4">
    <div class="">
  <div class="my-5 justify-center gap-4 grid lg:grid-cols-1 grid-cols-2 items-center">
       <div class=""><p class="bg-blue text-white rounded-md p-3 font-medium cursor-pointer">Developers</p></div>
         <div class=""><p class="faq-cat">SEO</p></div>
         <div class=""><p class="faq-cat">Birthdays</p></div>
         <div class=""><p class="faq-cat">Lorem Lysem</p></div>
    </div>
    </div>
  <div class="col-span-3">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4">
    <div class="">
                <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>
              

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>

              <div class="">
              <img src="<?php echo $mainUrl; ?>assets/client/images/project/mb_screen.png" alt="" class="">
              </div>
              
    </div>
  </div>
  </div>
  <div class="justify-center mt-14 flex">
        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
          <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Previous</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd"></path>
</svg>
          </a>
          <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
          <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-blue px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue">1</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
          <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
          <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
          <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
          <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
          <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
            <span class="sr-only">Next</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
</svg>
          </a>
        </nav>
        </div>
</div>
</section>
<!-- Our Team Section End -->

<script>
    function show() {
        document.querySelector('.hamburger').classList.
        toggle('open')
        document.querySelector('.navigation').classList.
        toggle('active')
    }
</script>


<?php include('../components/cursor.php'); ?>
<?php include('../components/footer.php'); ?>
