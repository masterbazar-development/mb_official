<?php include('../../components/header.php'); ?>
<?php include('../../components/loader.php'); ?>


<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 -right-32">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<?php include('../../components/menu.php'); ?>
<!-- Navigation ends Here -->


<style>
    .object {  
        position: absolute;
    animation-name: object;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    top: 30px;
    right: 50%;
}

@keyframes object {
    from { transform: translate(0,  0px); }
    65%  { transform: translate(0, 15px); }
    to   { transform: translate(0, -0px); }    
}
</style>

<!-- Hero Banner Section -->
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% h-full lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full mx-[3vw] md:mx-[10vw] h-full ">
        <?php include('../../components/heroheader.php'); ?>

        <div class="flex flex-col justify-between items-center lg:flex-row max-w-full gap-8 lg:gap-12 ">
            <div class="lg:w-[40%] order-2 lg:order-1 mt-8 h-full">
                <h1 class="2xl:text-5xl text-3xl text-head font-extrabold ">
                    We Handle Your Calls to Keep You Connected
                    <span class="text-blue"> With Your Customers</span>
                </h1>
                <p class=" md:text-lg lg:text-lg md:mt-5 text-start">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, rem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, facilis? Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="flex gap-2 md:gap-5 items-center justify-center lg:justify-start mt-5 lg:mt-8 mb-10 lg:mb-0">
                    <button class="sm:text-sm text-xs white bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] rounded-full text-head font-semibold sm:px-3 px-6 md:px-12 py-3 md:py-4 sm:py-3">Make An Appointment</button>
                </div>
            </div>
            <div class="lg:w-[60%] order-1 lg:order-2 h-full"> 
           
                <img src="<?php echo $mainUrl; ?>assets/client/images/onlinerepbanner.png" alt="" class="w-full">
                <!-- <div class="object">
                    <img src="<?php echo $mainUrl; ?>assets/client/images/onlineban1.png" Style="float:right">
                </div> -->
               
            </div>
        </div>
    </div>
</section>



<!-- second section starts here -->



<section class="lg:flex gap-16 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
    <div class="lg:w-[40%]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/onlinerep1.jpg" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">
            Experience, Expertise, and Commitment to Your Brand's Success</h2>
        <p class="md:text-base font-livvic lg:text-lg xl:text-lg mt-5">
            Our ORM services analyze, strategize, and implement solutions tailored to your unique needs
            Imagine Your Brand Shining in the Online World with Positive Reviews, Trustworthy Image, and Strong Brand Presence. Let Us Help You Achieve That! With MasterBazars ORM expertise, you can take control of your brand's narrative online. Imagine your brand standing out in the digital world with glowing reviews, a trustworthy image, and a strong brand presence. Our team of experts will work with you to develop and implement strategies that help you achieve a positive online reputation, enhance your brand's image, and create a lasting impression on your target audience.
        </p>
    </div>
</section>


<!-- second section starts here -->

<!------------ our services for digital maketiing starts here --------------->
<section class="max-w-full mx-[5vw] md:mx-[10vw] my-32 gap-8">
    <div class="">
        <h3 class="md:text-5xl text-4xl text-head font-extrabold sm:mb-4 mb-2">We Build Good <span class="text-[#264CC5] font-extrabold">Online Reputation</span></h3>
        <p class="text-gray-700 text-lg font-livvic font-normal">Our ORM services cover a wide range of strategies and tactics to enhance your online reputation. From monitoring and managing online reviews to optimizing your brand's presence on search engines and social media, we have the expertise to safeguard your reputation and help your brand thrive online.</p>
    </div>

    <div class="max-w-7xl grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 lg:gap-8 gap-4 mx-auto md:mt-10 mt-12">
        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-xl transition duration-300 ease-in-out hover:scale-110">
            <div class="relative w-max">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser1.png" class="w-16 mb-4">
            </div>
            <div class="flex-col justify-between">
                <h3 class="text-2xl text-head font-bold mb-1">ORM Implementation</h3>
                <p class="font-livvic">Our professionals merge practical ideas like assertive SEO for positive content marketing, publishing optimized press releases, uploading positive reviews on famous review sites, and removing negative reviews.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 rounded-lg shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser2.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Reputation and Brand Analysis</h3>
                <p class="font-livvic">We start the ORM process by investigating your brand presence, market presence, and competition. We scrutinize undetectable threats and aggressors for you in the case of a reputation attack.</p>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser3.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Strategy Development</h3>
                <p class="font-livvic">As an aspect of our Online Reputation Management Services, we develop a foolproof strategy for enhancing the brand's reputation and image by utilizing existing online resources.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 rounded-lg shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seosec4.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Online Branding</h3>
                <p class="font-livvic">We ensure that we assist you in building a strong, plausible, and efficient brand reputation. We also improve your brand's placement and public image on search engines and social media channels..</p>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser5.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Online Reputation Monitoring</h3>
                <p class="font-livvic">We regularly review the web and conversations online related to your brand and notify you as soon as we recognize any problems that need to be discussed. We also aid you in drafting responses as required.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 rounded-lg shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser6.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Reporting</h3>
                <p class="font-livvic">As part of our reputation management services, we provide detailed reports so that you can monitor the campaign's advancement.</p>
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