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




<!-- Hero Banner Section -->
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% h-full lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full min-h-full mx-[3vw] md:mx-[10vw] relative flex justify-center it">
        <?php include('../../components/heroheader.php'); ?>

        <div class="flex gap-20 max-h-full">
            <div class="flex-col items-center w-[60%] min-h-full flex justify-center">
                <div class="">
                    <h1 class="2xl:text-5xl md:text-3xl text-xl text-head font-extrabold leading-snug">Engage, Persuade, and Convert<span class="text-[#264CC5] font-extrabold">with the Power of Words</span>
                    </h1>
                </div>
                <div>
                    <p class="md:text-xl font-livvic font-normal mt-5 text-[#334155]  w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></p>
                    <span class="text-center text-lg font-semibold underline text-head mt-4">Lets Connect With Us</span>
                </div>
            </div>
            <div class="w-[40%] min-h-full flex justify-center items-center">                
                    <img id="contentImg" src="<?php echo $mainUrl; ?>assets/client/images/contentban11.png" alt="">             
            </div>
        </div>
    </div>
</section>

<script>
    let contentImg = document.getElementById('contentImg');
    let imgList = ["contentban11", "contentban22", "contentban33", "contentban44", ];
    const path = 'http://localhost/masterbazar24/assets/client/images/'
    let count = 0;
    function loopImg(){
        if(count >= imgList.length){
            count = 0;
        }
        console.log(count, contentImg.attributes.src)
        contentImg.setAttribute('src',  `${path}${imgList[count]}.png`);   
        count++;     
    }

    setInterval( loopImg, 1000);
</script>



<!-- second section starts here -->

<section class="lg:block hidden lg:flex gap-12 xl:gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-32">
    <div class="w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-3xl text-head font-extrabold leading-snug">
            Content Writing Solutions for Your Blog and Article Needs</h2>
        <p class="lg:text-lg xl:text-xl mt-5">
            At MasterBazar, we are masters of the written word. Our professional content writing services are designed to captivate your audience, drive traffic, engagement, and conversions. With our expert team of writers, we create content that resonates with your target audience, tells your unique story, and positions your brand as an authority in your niche. Partner with us to unlock the true potential of your content and achieve your business goals.
        </p>
    </div>
    <div class="w-[40%] ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/content1.jpg" alt="" class="w-full">
    </div>
</section>

<section class="lg:hidden block  max-w-full mx-[5vw] md:mx-[10vw] mt-16 md:mt-32">
    <div class=" ">
        <img src="<?php echo $mainUrl; ?>assets/client/images/content1.jpg" alt="" class="w-full">
    </div>
    <div class="mt-5 my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">
            Content Writing Solutions for Your Blog and Article Needss</h2>
        <p class="md:text-xl mt-5">
            At MasterBazar, we are masters of the written word. Our professional content writing services are designed to captivate your audience, drive traffic, engagement, and conversions. With our expert team of writers, we create content that resonates with your target audience, tells your unique story, and positions your brand as an authority in your niche. Partner with us to unlock the true potential of your content and achieve your business goals.
        </p>
    </div>
</section>

<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
    <div class="lg:w-[40%]">
        <img src="<?php echo $mainUrl; ?>assets/client/images/content2.jpg" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] my-auto">
        <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold leading-snug">Experience, Excellence, and Exceptional Results</h2>
        <p class="md:text-xl lg:text-lg xl:text-xl mt-5">
            At MasterBazar, we understand the power of storytelling, and we use our creative writing skills to transform your ideas into compelling content. Our words paint a vivid picture, evoke emotions, and create memorable experiences for your audience. With our professional blog and article writing solutions, let us help you unleash the true storytelling potential of your brand with our exceptional content writing services.
        </p>
    </div>
</section>


<!-- second section starts here -->

<!------------ our services for digital maketiing starts here --------------->
<section class="max-w-full mx-[5vw] md:mx-[10vw] my-32 gap-8">
    <div class="">
        <h3 class="md:text-5xl text-4xl text-head font-extrabold sm:mb-4 mb-2">Our<span class="text-[#264CC5] font-extrabold">Services</span></h3>
        <p class="text-gray-700 text-lg font-livvic font-normal">Our services encompass a wide range of SEO solutions to cater to your specific business needs. From conducting in-depth keyword research and optimizing your website's content and structure to developing effective link building strategies and implementing technical SEO best practices, our comprehensive approach ensures that your website is fully optimized for search engines. With our expertise in the latest SEO trends and techniques, we can help you achieve higher search rankings, increase organic traffic, and drive meaningful results for your website's success.</p>
    </div>

    <div class="max-w-7xl grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 lg:gap-8 gap-4 mx-auto md:mt-10 mt-12">
        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 ease-in-out hover:scale-110">
            <div class="relative w-max">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser1.png" class="w-16 mb-4">
            </div>
            <div class="flex-col justify-between">
                <h3 class="text-2xl text-head font-bold mb-1">Blogs</h3>
                <p class="font-livvic">Blogs help you establish your authority, attract more visitors, increase awareness of your brand, and generate leads for your business. They are short, informal pieces of writing to share information, insights, opinions or experiences on a specific topic.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 rounded-lg shadow-md hover:shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser2.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Articles</h3>
                <p class="font-livvic">Articles help you showcase your expertise, build your credibility reach a wider audience, and set you as 'the source of information' in your industry. They are longer, more formal, and provide information, research, analysis, or an argument on a specific topic.</p>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-md hover:shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser3.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Website Content Writing</h3>
                <p class="font-livvic">We become your voice on your website, our content not only informs but retains and converts your target audience into paying customers. Whether you need a landing page or a full website, we can write it for you with clarity, creativity, and SEO optimization</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 rounded-lg shadow-md hover:shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seosec4.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">SEO Content Writing</h3>
                <p class="font-livvic">We do market research and competitor analysis, define keywords, audience, and goals, and write SEO-friendly content that helps you rank higher on search engines, it not only increases your visibility but boosts organic traffic to your website.</p>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] text-gray-800 px-4 py-6 rounded-lg shadow-md hover:shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser5.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Product Description</h3>
                <p class="font-livvic">We help you showcase your products or services in the most persuasive and compelling way. By highlighting features, benefits, and unique selling points our skilled writers create concise and informative descriptions that drive conversion.</p>
            </div>
        </div>

        <div class="bg-white text-gray-800 px-4 py-6 rounded-lg shadow-md hover:shadow-xl flex justify-between items-start flex-col transition duration-300 ease-in-out hover:scale-110">
            <div class="h-full">
                <img src="<?php echo $mainUrl ?>/assets/client/images/seoser6.png" class="w-16 mb-4">
                <h3 class="text-2xl text-head font-bold mb-1">Technical Writing Services</h3>
                <p class="font-livvic">We help you with your product or service user manuals, tutorials, FAQs, guides, white papers, and other technical documents. We help you communicate complex and technical information, instructions, or troubleshooting information in an easy-to-understand way.</p>
            </div>

        </div>
    </div>
</section>
<!------------ our services for content writing  ends here --------------->




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