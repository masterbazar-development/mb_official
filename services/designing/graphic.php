<?php include('../../components/header.php'); ?>
<?php include('../../components/loader.php'); ?>
<?php include('../../components/navmenu.php');
include('../../mb-admin/config/dbcon.php'); ?>



<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="hidden xl:block fixed -top-60 sm:-right-40 -right-40 z-[95]">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<?php include('../../components/menu.php'); ?>
<!-- Navigation ends Here -->

<!-- Hero Banner starts here Section -->

<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% h-full lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full mx-[10vw]">
        <?php include('../../components/heroheader.php'); ?>
    </div>
    <div class="flex flex-col items-center mt-10 lg:mt-32 lg:flex-row max-w-full mx-[5vw] gap-8 lg:gap-20 md:mx-[10vw] ">
        <div class="lg:w-1/2 order-2 lg:order-1">
            <h1 class="2xl:text-5xl text-3xl text-head font-extrabold ">
            We Bring Your
                <span class="text-blue">Brand's Vision To Life</span>
            </h1>
            <p class="lg:w-3/4 md:text-lg lg:text-xl md:mt-5 text-start">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequatur porro maiores dolor dignissimos nam illum optio error sunt, beatae veniam quo esse similique nesciunt, maxime dolorum unde, dolores at inventore! Officia incidunt, modi sapiente veniam error vitae optio ea, suscipit autem id enim vel nulla repellendus. Ad, amet obcaecati.
            </p>
            <div class="flex gap-2 md:gap-5 items-center justify-center lg:justify-start mt-5 lg:mt-16 mb-10 lg:mb-0">
                <button class="sm:text-sm text-xs white bg-[#264CC9] rounded-full text-white sm:px-3 px-6 md:px-6 py-3 md:py-3 sm:py-3">Lets Work Together</button>
                <!-- <p class="sm:text-sm text-xs">Come Join US</p> -->
            </div>
        </div>
        <div class="lg:w-1/2 order-1 lg:order-2">
            <img src="<?php echo $mainUrl; ?>assets/client/images/graphicBanner.png" alt="" class="w-full">
        </div>
    </div>
</section>
<!-- Hero Banner Section ends here -->


<!-- second section starts here -->

<section class="lg:block hidden gap-12 xl:gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-32">
    <div class="w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-3xl text-head font-extrabold leading-snug">Crafting Visual Narratives that Captivate Your Audience's Imagination</h2>
        <p class="lg:text-lg xl:text-xl font-livvic mt-5">
        At MasterBazar, we understand that every brand has a unique story to tell. Our expert graphic designers specialize in creating captivating visual narratives that paint a picture, evoke emotions, and engage your audience on a deeper level. From concept to creation, we bring your brand's vision to life through stunning graphic designs that leave a lasting impression.
        </p>
    </div>
    <div class="w-[40%] ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/graphicsec2.jpg" alt="" class="w-full">
    </div>
</section>

<section class="lg:hidden block  max-w-full mx-[5vw] md:mx-[10vw] mt-16 md:mt-32">
    <div class=" ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/graphicsec2.jpg" alt="" class="w-full">
    </div>
    <div class="mt-5 my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">Crafting Visual Narratives that Captivate Your Audience's Imagination</h2>
        <p class="md:text-xl font-livvic mt-5">
        At MasterBazar, we understand that every brand has a unique story to tell. Our expert graphic designers specialize in creating captivating visual narratives that paint a picture, evoke emotions, and engage your audience on a deeper level. From concept to creation, we bring your brand's vision to life through stunning graphic designs that leave a lasting impression.
        </p>
    </div>
</section>

<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
    <div class="lg:w-[40%]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/graphicsec1.jpg" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">Graphic Design Services for Your Every Need</h2>
        <p class="md:text-xl font-livvic lg:text-lg xl:text-xl mt-5">
        With our experienced team of designers and cutting-edge tools, we deliver high-quality designs that are tailored to your specific requirements, helping you create a cohesive and impactful brand presence across all digital platforms.
        </p>
    </div>
</section>

<!-- second section starts here -->

<!----------------- our services web development timeline starts here --------------------->
<section class="lg:flex max-w-full md:mt-32 mt-16 mx-[5vw] md:mx-[10vw]">
  <div class="parent lg:w-1/3">
    <div class="is-sticky  mb-10">
      <h2 class="lg:w-2/3 text-head text-4xl lg:text-6xl font-bold">What Do We Do</h2>
      <p class="text-sm mt-6 lg:w-2/3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, beatae explicabo consequuntur omnis rerum, saepe quos tempora dicta ratione repellendus debitis quae qui eum voluptates voluptatum id aliquam, atque quaerat!</p>
      <div class="flex items-center text-head text-xl mt-2 hover:translate-x-3 transition-transform duration-300 ">
        <p class="font-semibold">see our work </p>
        <p class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25" />
          </svg></p>
      </div>
    </div>
  </div>

  <div class="lg:w-2/3">
    <div class="scroll-par flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">01</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Logo Design</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">It's critical that your logo accurately represents your company, leaving a lasting impression and engaging your audience. The logo is only the first step in creating a strong brand identity.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">02</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Flyer Design</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We have a network of professional printers on hand to ensure that you receive high-quality printed materials that you will be proud of. We merge the skills of a compelling visual design agency with exceptional print quality.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">03</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Brochure Design</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We provide Our design team creates a brochure to highlight the products and services provided by experts in uninterruptible power supplies. We differentiated the various services by using the existing colors.
        </p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">04</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Stationery Design</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We will make you look professional by designing a set of business stationery that you will be appreciative to send and distribute. A layout for business cards, congratulatory slips, and your letterheads is included in the fee.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">05</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Newsletter Design</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">Increase customer loyalty and sales while keeping your brand at the forefront of people's minds with innovative newsletters. Keep your customers up to date on specials, new products and services, news, events, and awards.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">06</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Video Editing</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We will also create all necessary supporting graphics in videos as a design firm. Furthermore, we were able to create an informative yet modern and eye-catching design by utilizing high-quality imagery.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">07</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Banner Design</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">Regular banner design that is informative and entertaining will help to retain as well as build new and better friendships, and increase sales. Customers who are well-informed will become repeat buyers.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">08</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Advertisement Design</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1">We understand what clients want because we have worked with several companies before working on yours. Simply click on our ad button, and we will begin the advertising process right away.</p>
      </div>
    </div>

  </div>
</section>
<!----------------- our services web development timeline ends here --------------------->

<div class="my-32">
  <?php include('../../components/testimonial.php'); ?>
</div>

<?php include('../../components/ContactUs.php'); ?>
<?php include('../../components/subscription.php'); ?>

<script>
  function show() {
    document.querySelector('.hamburger').classList.
    toggle('open')
    document.querySelector('.navigation').classList.
    toggle('active')
  }
</script>


<?php include('../../components/footer.php'); ?>