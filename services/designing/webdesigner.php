<?php include('../../components/header.php'); ?>
<?php include('../../components/loader.php'); ?>


<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 -right-32">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<?php include('../../components/menu.php'); ?>
<!-- Navigation ends Here -->

<!-- Hero Banner starts here Section -->
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full  mx-[10vw]">
        <?php include('../../components/heroheader.php'); ?>

        <div class="lg:flex grid items-center justify-between 2xl:gap-16 gap-12 my-12 lg:my-40">
            
            <div class="font-medium order-2 lg:order-1 2xl:py-20 flex flex-col justify-center max-w-7xl mx-auto text-center">

                <h1 class="2xl:text-6xl text-3xl text-head font-extrabold leading-snug">
                    We Create Interfaces That <span class="text-blue">Delight, Engage, and Convert</span>
                </h1>
                <p class="text-xl font-livvic font-normal mt-5 text-[#334155] lg:px-20 w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consequatur porro maiores dolor dignissimos nam illum optio error sunt, beatae veniam quo esse similique nesciunt, maxime dolorum unde, dolores at inventore! Officia incidunt, modi sapiente veniam error vitae optio ea, suscipit autem id enim vel nulla repellendus. Ad, amet obcaecati.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></p>
                <div class="flex justify-center gap-3 mt-10 text-xl font-livvic font-normal text-[#334155] lg:px-20 w-full">
                    <p>lets Create Your Dream Website</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- Hero Banner Section ends here -->


<!-- second section starts here -->

<section class="lg:block hidden lg:flex gap-12 xl:gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-32">
    <div class="w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-3xl text-head font-extrabold leading-snug">We Craft Interfaces That Delight Users and Drive Business Success</h2>
        <p class="lg:text-lg xl:text-xl mt-5">
            At MasterBazar, we believe that great UI/UX design is the foundation of any successful digital product. Our team of skilled designers specializes in creating intuitive interfaces that are visually appealing, easy to use, and optimized for a seamless user experience. From wireframing and prototyping to visual design and usability testing, we follow a comprehensive approach to ensure that every aspect of your product's interface is thoughtfully designed. With our UI/UX expertise, we can help you create digital products that not only meet the needs of your users but also drive business success.
        </p>
    </div>
    <div class="w-[40%] ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/webdes1.jpg" alt="" class="w-full">
    </div>
</section>

<section class="lg:hidden block  max-w-full mx-[5vw] md:mx-[10vw] mt-16 md:mt-32">
    <div class=" ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/webdes1.jpg" alt="" class="w-full">
    </div>
    <div class="mt-5 my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">We Craft Interfaces That Delight Users and Drive Business Success</h2>
        <p class="md:text-xl mt-5">
            At MasterBazar, we believe that great UI/UX design is the foundation of any successful digital product. Our team of skilled designers specializes in creating intuitive interfaces that are visually appealing, easy to use, and optimized for a seamless user experience. From wireframing and prototyping to visual design and usability testing, we follow a comprehensive approach to ensure that every aspect of your product's interface is thoughtfully designed. With our UI/UX expertise, we can help you create digital products that not only meet the needs of your users but also drive business success.
        </p>
    </div>
</section>

<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
    <div class="lg:w-[40%]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/webses2.jpg" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">Make Users Fall in Love</h2>
        <p class="md:text-xl lg:text-lg xl:text-xl mt-5">
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