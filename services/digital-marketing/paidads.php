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
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full ">
        <?php include('../../components/heroheader.php'); ?>

        <div class="flex flex-col items-center mt-10 lg:mt-32 lg:flex-row max-w-full mx-[5vw] gap-8 lg:gap-20 md:mx-[10vw] ">
            <div class="lg:w-1/2 order-2 lg:order-1">
                <h1 class="2xl:text-5xl text-3xl text-head font-extrabold ">
                Increase Conversion
                    <span class="text-blue">with Targeted Traffic</span>
                </h1>
                <p class="lg:w-3/4 md:text-lg lg:text-xl md:mt-5 text-start">
                    From SEO to Social Media, We'll Help You Build a Powerful Online Presence and Drive More Sales Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, harum.
                </p>
                <div class="flex gap-2 md:gap-5 items-center justify-center lg:justify-start mt-5 lg:mt-16 mb-10 lg:mb-0">
                    <button class="sm:text-sm text-xs white bg-[#264CC9] rounded-full text-white sm:px-3 px-6 md:px-6 py-3 md:py-3 sm:py-3">Lets Work Together</button>
                    <p class="sm:text-sm text-xs">Come Join US</p>
                </div>
            </div>
            <div class="lg:w-1/2 order-1 lg:order-2">
                <img src="<?php echo $mainUrl; ?>assets/client/images/paidadban.png" alt="" class="w-full">
            </div>
        </div>

    </div>
</section>
<!-- Hero Banner Section ends here -->


<!-- second section starts here -->

<section class="lg:block hidden lg:flex gap-12 xl:gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-32">
    <div class="w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-3xl text-head font-extrabold leading-snug">
            Get Noticed, Get Clicks, Get Results</h2>
        <p class="lg:text-lg font-livvic xl:text-xl mt-5">
            Our paid advertising solutions are designed to help your business achieve maximum visibility, reach, and results on the internet. We create and manage strategic paid advertising campaigns across various platforms, including Google paid search, Pay-Per-Click (PPC), display ads, retargeting ads, in-stream ads, and more. Our data-driven approach ensures that your paid advertising campaigns are optimized for success, driving qualified traffic, leads, and conversions to your website.
        </p>
    </div>
    <div class="w-[40%] ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/paidads1.jpg" alt="" class="w-full">
    </div>
</section>

<section class="lg:hidden block  max-w-full mx-[5vw] md:mx-[10vw] mt-16 md:mt-32">
    <div class=" ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/paidads1.jpg" alt="" class="w-full">
    </div>
    <div class="mt-5 my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">
            Get Noticed, Get Clicks, Get Results</h2>
        <p class="md:text-xl font-livvic mt-5">
            Our paid advertising solutions are designed to help your business achieve maximum visibility, reach, and results on the internet. We create and manage strategic paid advertising campaigns across various platforms, including Google paid search, Pay-Per-Click (PPC), display ads, retargeting ads, in-stream ads, and more. Our data-driven approach ensures that your paid advertising campaigns are optimized for success, driving qualified traffic, leads, and conversions to your website.
        </p>
    </div>
</section>

<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
    <div class="lg:w-[40%]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/paidads2.jpg" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">Targeted and Effective Advertising Strategy that Drives Results</h2>
        <p class="md:text-xl font-livvic lg:text-lg xl:text-xl mt-5">
            Our paid advertising solutions are designed to unlock the full potential of your online advertising strategy. We help you create compelling ad campaigns that target your ideal audience, drive relevant traffic to your website, and generate tangible outcomes for your business. With our expertise in paid advertising, you can imagine a future where your brand's online presence is amplified, your customer base grows, and your ROI soars.
        </p>
    </div>
</section>

<!-- second section ends here -->

<!------------ our services for digital maketiing starts here --------------->
<section class="max-w-full mx-[5vw] md:mx-[10vw] my-32 gap-8">
    <div class="">
        <h3 class="md:text-5xl text-4xl text-head font-extrabold sm:mb-4 mb-2">Our <span class="text-[#264CC5] font-extrabold">Services</span></h3>
        <p class="text-gray-700 text-lg font-livvic font-normal">Our services encompass a wide range of paid advertising strategies, including Google paid search, Pay-Per-Click (PPC), display ads, retargeting ads, in-stream ads, and more. From campaign setup to ongoing monitoring and optimization, our expert team ensures that your paid advertising efforts deliver exceptional results.</p>
    </div>

    <div class="max-w-7xl grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 lg:gap-8 gap-4 mx-auto md:mt-10 mt-12">
        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 services-effect">
            <div class="relative w-max">
                <img src="<?php echo $mainUrl ?>/assets/client/images/search-ads.png" class="w-16 mb-4">
            </div>
            <div class="flex-col justify-between">
                <h3 class="text-2xl text-head font-bold mb-1">Search Ads</h3>
                <p class="font-livvic">We help you create and manage ads that appear on search engines like Google and Bing when users search for keywords related to your products or services. We optimize your bids, keywords, ad copy, and landing pages to maximize your return on investment.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 flex justify-between items-start flex-col services-effect">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/display-ads.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Display Ads</h3>
                <p class="font-livvic">We help you create and manage ads that appear on websites, apps, and videos that are relevant to your target audience. We use eye-catching images, animations, and interactive elements to attract attention and generate clicks.</p>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6  flex justify-between items-start flex-col services-effect">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/social-ads.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Social Ads</h3>
                <p class="font-livvic">We help you create and manage ads that appear on social media platforms like Facebook, Instagram, Twitter, and LinkedIn. We use engaging content, images, videos, and stories to reach your ideal customers and grow your brand awareness.</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 lg:gap-8 gap-4 mx-auto md:mt-10 mt-12">
        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 services-effect">
            <div class="relative w-max">
                <img src="<?php echo $mainUrl ?>/assets/client/images/remarketing-ads.png" class="w-16 mb-4">
            </div>
            <div class="flex-col justify-between">
                <h3 class="text-2xl text-head font-bold mb-1">Remarketing Ads</h3>
                <p class="font-livvic">We help you create and manage ads that target users who have already visited your website or interacted with your brand. We use personalized messages and offers to remind them of your value proposition and encourage them to take action.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6  flex justify-between items-start flex-col services-effect">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/stream-ads.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">In-stream Ads</h3>
                <p class="font-livvic">We help you create and manage ads that appear before, during, or after online videos on platforms like YouTube, Twitch, and Hulu. We use captivating videos that match the content and context of the video to capture the viewers’ interest and drive conversions.</p>
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


<?php include('../../components/cursor.php'); ?>
<?php include('../../components/footer.php'); ?>