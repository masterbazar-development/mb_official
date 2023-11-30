<?php include('../../components/header.php'); ?>
<?php include('../../components/loader.php'); ?>
<<<<<<< HEAD
<?php include('../../components/navmenu.php'); ?>
=======
<?php include('../../components/navmenu.php');
include('../../mb-admin/config/dbcon.php'); ?>

>>>>>>> d3b574a10859b34a3993400a1d72be84b266dde6

<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="hidden xl:block fixed -top-60 sm:-right-40 -right-40 z-[95]">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<?php include('../../components/menu.php'); ?>
<!-- Navigation ends Here -->


<!-- Hero Banner starts here Section -->
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full ">
        <?php include('../../components/heroheader.php'); ?>

        <div class="flex flex-col items-center mt-10 lg:mt-32 lg:flex-row max-w-full mx-[5vw] gap-8 lg:gap-20 md:mx-[10vw] ">
            <div class="lg:w-1/2 order-2 lg:order-1">
                <h1 class="2xl:text-5xl text-3xl text-head font-extrabold ">
                Maximize Your
                    <span class="text-blue">Social Media Impact</span>
                </h1>
                <p class="lg:w-3/4 md:text-lg lg:text-xl md:mt-5 text-start">
                Drive Engagement, Build Relationships, and Achieve s Your Social Media Goals
                </p>
                <div class="flex gap-2 md:gap-5 items-center justify-center lg:justify-start mt-5 lg:mt-16 mb-10 lg:mb-0">
                    <button class="sm:text-sm text-xs white bg-[#264CC9] rounded-full text-white sm:px-3 px-6 md:px-6 py-3 md:py-3 sm:py-3">Lets Work Together</button>
                    <p class="sm:text-sm text-xs">Come Join US</p>
                </div>
            </div>
            <div class="lg:w-1/2 order-1 lg:order-2">
                <img src="<?php echo $mainUrl; ?>assets/client/images/smmban.png" alt="" class="w-full">
            </div>
        </div>
    </div>
</section>
<!-- Hero Banner Section ends here -->


<!-- second section starts here -->

<section class="lg:block hidden lg:flex gap-12 xl:gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-32">
    <div class="w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-3xl text-head font-extrabold leading-snug">
            Social Media Marketing Solutions That Work for Your Business</h2>
        <p class="lg:text-lg font-livvic xl:text-xl mt-5">
            At MasterBazar, we offer comprehensive social media marketing solutions that are tailored to meet the unique needs of your business. Our team of social media experts will work with you to develop and implement customized strategies that drive engagement, build relationships with your target audience, and help you achieve your social media goals. From content creation and curation to social media advertising, community management, and analytics, we have the expertise and experience to deliver results for your brand on social media platforms.
        </p>
    </div>
    <div class="w-[40%] ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/smm1.jpg" alt="" class="w-full">
    </div>
</section>

<section class="lg:hidden block  max-w-full mx-[5vw] md:mx-[10vw] mt-16 md:mt-32">
    <div class=" ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/smm1.jpg" alt="" class="w-full">
    </div>
    <div class="mt-5 my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">
            Social Media Marketing Solutions That Work for Your Business</h2>
        <p class="md:text-xl font-livvic mt-5">
            At MasterBazar, we offer comprehensive social media marketing solutions that are tailored to meet the unique needs of your business. Our team of social media experts will work with you to develop and implement customized strategies that drive engagement, build relationships with your target audience, and help you achieve your social media goals. From content creation and curation to social media advertising, community management, and analytics, we have the expertise and experience to deliver results for your brand on social media platforms.
        </p>
    </div>
</section>

<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
    <div class="lg:w-[40%]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/smm2.jpg" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">Spark Desire and Drive Success</h2>
        <p class="md:text-xl font-livvic lg:text-lg xl:text-xl mt-5">
            From creating buzz around your brand, generating leads, and driving website traffic to increasing your brand's visibility, engagement, and loyalty on social media platforms, we can help you achieve social media success. Let us craft compelling social media campaigns that captivate your audience and drive meaningful results for your business.
        </p>
    </div>
</section>

<!-- second section ends here -->

<!------------ our services for digital maketiing starts here --------------->
<section class="max-w-full mx-[5vw] md:mx-[10vw] my-32 gap-8">
    <div class="">
        <h3 class="md:text-5xl text-4xl text-head font-extrabold sm:mb-4 mb-2">Our <span class="text-[#264CC5] font-extrabold">Services</span></h3>
        <p class="text-gray-700 text-lg font-livvic font-normal">From creating engaging and shareable content, managing social media accounts, implementing social media advertising campaigns, conducting social media audits, and providing comprehensive analytics and reporting, we offer a holistic approach to help you succeed on social media. Let us be your trusted partner in maximizing your brand's impact on social media platforms.</p>
    </div>

    <div class="max-w-7xl grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 lg:gap-8 gap-4 mx-auto md:mt-10 mt-12">
        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-xl transition duration-300 ease-in-out hover:scale-110">
            <div class="relative w-max">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser1.png" class="w-16 mb-4">
            </div>
            <div class="flex-col justify-between">
                <h3 class="text-2xl text-head font-bold mb-1">Increase Followers</h3>
                <p class="font-livvic">We help you grow your social media audience by attracting and retaining loyal and relevant followers. We use organic and paid strategies to reach your ideal customers and influencers.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 rounded-lg shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser2.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Increase Engagement</h3>
                <p class="font-livvic">We help you boost your social media interactions by creating and sharing valuable and captivating content. We use best practices and techniques to encourage likes, comments, shares, and mentions.</p>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser3.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Increase Traffic & Conversion</h3>
                <p class="font-livvic">We help you drive more visitors and leads to your website or landing page by using effective and persuasive calls to action. We also help you optimize your website or landing page for conversion and retention.</p>
            </div>
        </div>


    </div>
</section>
<!------------ our services for digital maketiing ends here --------------->



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