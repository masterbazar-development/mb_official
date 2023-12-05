<?php include('../../components/header.php'); ?>
<?php include('../../components/loader.php'); ?>
<?php include('../../components/navmenu.php');
include('../../mb-admin/config/dbcon.php'); ?>



<!-- Hero Banner starts here Section -->
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% h-full lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full mx-[10vw]">
        <?php include('../../components/heroheader.php'); ?>
    </div>
    <div class="flex flex-col items-center mt-10 lg:mt-32 lg:flex-row max-w-full mx-[5vw] gap-8 lg:gap-20 md:mx-[10vw] ">
        <div class="lg:w-1/2 order-2 lg:order-1">
            <h1 class="2xl:text-5xl text-3xl text-head font-extrabold ">
                Skyrocket Your Online Presence with
                <span class="text-blue">Masterbazar Proven Digital Marketing Strategies</span>
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
            <img src="<?php echo $mainUrl; ?>assets/client/images/marketting-banner.png" alt="" class="w-full pt-14">
        </div>
    </div>
</section>
<!-- Hero Banner Section ends here -->

<!-------- first section of digital maketiing starts here ---------->
<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
    <div class="lg:w-[40%]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/digisec.jpg" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold mt-5 lg:mt-0 leading-snug">From SEO and SEM to Social Media and Content Marketing, We Drive Your Online Success.</h2>
        <p class=" font-livvic xl:text-xl mt-5 ">
            At MasterBazar we harness the power of digital channels to tell your brand's story in a way that resonates with your audience, evokes emotion, and builds strong connections. Our creative and strategic approach will help you captivate your audience, build brand loyalty, and achieve your business goals.
            As a professional digital marketing agency in USA, we offer a wide range of digital marketing services designed to boost your online presence and drive tangible results. Our seasoned team of digital marketing experts crafts customized strategies tailored to your business goals, we utilize cutting-edge tools and techniques to increase your website traffic.
            We improve your search rankings, engage your target audience, and drive conversions. We are dedicated towards you to increase your brand visibility, higher website performance, and a significant boost to your online business.
        </p>
    </div>
</section>
<!-------- first section of digital maketiing ends here ---------->


<!------------ our services for digital maketiing starts here --------------->
<section class="max-w-full mx-[5vw] md:mx-[10vw] my-32 gap-8">
    <div class="">
        <h3 class="md:text-5xl text-4xl text-head font-extrabold sm:mb-4 mb-2">Our <span class="text-[#264CC5] font-extrabold">Services</span></h3>
        <p class="text-gray-700 text-lg font-livvic font-normal">From the best website design and development to the best SEO and social media marketing in USA, we offer a complete range of digital services to help you achieve your business goals. Maximize your online presence with our expert team. media marketing in USA, we offer a complete range of digital services to help you achieve your business goals. Maximize your online presence with our expert team.</p>
    </div>

    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 lg:gap-8 gap-4 mx-auto md:mt-10 mt-12">
        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 services-effect">
            <div class="relative w-max">
                <img src="<?php echo $mainUrl ?>/assets/client/images/search-engine.png" class="w-16 mb-4">

            </div>
            <div class="flex-col justify-between">
                <h3 class="text-2xl text-head font-bold mb-1">Search Engine Optimization</h3>
                <p class="font-livvic">We help your business rank higher in search engines like Google. We boost your website's organic traffic resulting in more revenue, by optimizing it for SEO, by keyword-centric content creation, improving website speed and performance, link building, and much more.</p>
                <button class="text-head px-6 py-2 mt-4 rounded-md bg-white text-sm font-bold">Read More</button>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 flex justify-between items-start flex-col services-effect">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/ads.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Paid Advertisement</h3>
                <p class="font-livvic">We bring your targetted audience to your business with paid ad campaigns on Google, Facebook, and more. We create targeted ad campaigns, including banner ads, display ads, SEM, retargeting, and much more to bring traffic and increase conversion.</p>
            </div>
            <button class="text-head px-6 py-2 mt-4 rounded-md bg-gray-200 text-sm font-bold">Read More</button>
        </div>

        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 services-effect flex justify-between items-start flex-col">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/opti.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Social Media Optimization</h3>
                <p class="font-livvic">We conduct research and analysis, gather insights, and prepare content strategies to optimize and enhance your social media presence. We create engaging content for your brand, to increase reach, awareness, engagement, and social media followers.</p>
            </div>
            <button class="text-head px-6 py-2 mt-4 rounded-md bg-white text-sm font-bold">Read More</button>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6  flex justify-between items-start flex-col services-effect">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/socialmarket.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Social Media marketing</h3>
                <p class="font-livvic">We create and execute successful Social Media Marketing campaigns that drive more traffic to your website, and increase brand recognition and loyalty. We create targeted campaigns to help you reach your audience and increase customer engagement.</p>
            </div>
            <button class="text-head px-6 py-2 mt-4 rounded-md bg-gray-200 text-sm font-bold">Read More</button>
        </div>
    </div>
</section>
<!------------ our services for digital maketiing ends here --------------->

<div class="my-32">
    <?php include('../../components/testimonial.php'); ?>
</div>

<?php include('../../components/ContactUs.php'); ?>


<script>
    function show() {
        document.querySelector('.hamburger').classList.
        toggle('open')
        document.querySelector('.navigation').classList.
        toggle('active')
    }
</script>


<?php include('../../components/footer.php'); ?>