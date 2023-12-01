<?php include('../../components/header.php'); ?>
<?php include('../../components/loader.php'); ?>
<?php include('../../components/navmenu.php');
include('../../mb-admin/config/dbcon.php'); ?>



<!-- Hero Banner starts here Section -->
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% lg:h-screen w-screen overflow-hidden">
  <div class="max-w-full ">
  <div class="max-w-full mx-[10vw]">
        <?php include('../../components/heroheader.php'); ?>
    </div>

    <div class="flex flex-col items-center lg:flex-row max-w-full mx-[5vw] gap-8 lg:gap-20 md:mx-[10vw] ">
      <div class="lg:w-1/3 order-2 lg:order-1">
        <h1 class="2xl:text-5xl text-3xl text-head font-extrabold ">
        We Create Interfaces That
          <span class="text-blue">Delight, Engage, and Convert</span>
        </h1>
        <p class="lg:w-3/4 md:text-lg lg:text-xl md:mt-5 text-start">
          Drive Engagement, Build Relationships, and Achieve s Your Social Media Goals
        </p>
        <div class="flex gap-2 md:gap-5 items-center justify-center lg:justify-start mt-5 lg:mt-16 mb-10 lg:mb-0">
          <button class="sm:text-sm text-xs white bg-[#264CC9] rounded-full text-white sm:px-3 px-6 md:px-6 py-3 md:py-3 sm:py-3">Lets Work Together</button>
          <p class="sm:text-sm text-xs">Come Join US</p>
        </div>
      </div>
      <div class="lg:w-2/3 order-1 lg:order-2">
        <img src="<?php echo $mainUrl; ?>assets/client/images/designbanner.png" alt="" class="w-full pt-14">
      </div>
    </div>


  </div>
</section>
<!-- Hero Banner Section ends here -->


<!-- second section starts here -->

<section class=" hidden lg:flex gap-12 xl:gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-32">
  <div class="w-[60%] my-auto">
    <h2 class="2xl:text-5xl text-3xl text-head font-extrabold leading-snug">We Craft Interfaces That Delight Users and Drive Business Success</h2>
    <p class="lg:text-lg font-livvic xl:text-xl mt-5">
      At MasterBazar, we believe that great UI/UX design is the foundation of any successful digital product. Our team of skilled designers specializes in creating intuitive interfaces that are visually appealing, easy to use, and optimized for a seamless user experience. From wireframing and prototyping to visual design and usability testing, we follow a comprehensive approach to ensure that every aspect of your product's interface is thoughtfully designed. With our UI/UX expertise, we can help you create digital products that not only meet the needs of your users but also drive business success.
    </p>
  </div>
  <div class="w-[40%] ">
    <img src="<?php echo $mainUrl; ?>assets/client/images/uiuxsec.jpg" alt="" class="w-full">
  </div>
</section>

<section class="lg:hidden block  max-w-full mx-[5vw] md:mx-[10vw] mt-16 md:mt-32">
  <div class=" ">
    <img src="<?php echo $mainUrl; ?>assets/client/images/uiuxsec.jpg" alt="" class="w-full pt-14">
  </div>
  <div class="mt-5 my-auto">
    <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">We Craft Interfaces That Delight Users and Drive Business Success</h2>
    <p class="md:text-lg font-livvic mt-5">
      At MasterBazar, we believe that great UI/UX design is the foundation of any successful digital product. Our team of skilled designers specializes in creating intuitive interfaces that are visually appealing, easy to use, and optimized for a seamless user experience. From wireframing and prototyping to visual design and usability testing, we follow a comprehensive approach to ensure that every aspect of your product's interface is thoughtfully designed. With our UI/UX expertise, we can help you create digital products that not only meet the needs of your users but also drive business success.
    </p>
  </div>
</section>

<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
  <div class="lg:w-[40%]">
    <img src="<?php echo $mainUrl; ?>assets/client/images/desmainsec2.jpg" alt="" class="w-full ">
  </div>
  <div class="lg:w-[60%] my-auto">
    <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">Make Users Fall in Love</h2>
    <p class="md:text-lg font-livvic lg:text-lg xl:text-xl mt-5">
      Our UI/UX design solutions are focused on creating interfaces that are not only visually appealing but also deliver exceptional user experiences. We understand that every user interaction matters and strive to craft interfaces that are intuitive, engaging, and delightful. Our team of experienced designers combines research, data-driven insights, and design best practices to create interfaces that resonate with your target audience and drive desired actions. Whether it's a website, mobile app, or any other digital product, our UI/UX solutions are tailored to make your users fall in love with your product.
    </p>
  </div>
</section>


<!-- second section starts here -->



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