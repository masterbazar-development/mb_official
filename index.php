<?php
define('TITLE', '');
define('DESCRIPTION', '');
include('./components/header.php');
include('./components/loader.php');
include('./components/menu.php');

?>
<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 -right-32">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<div class="navigation flex justify-between items-end px-32 pb-20">
    <div id="blurButton" class="hamburger cursor-pointer" onclick="show()">
        <div id="bar1" class="bar bg-blue rounded-md"></div>
        <div id="bar2" class="bar bg-blue w-1/2 rounded-md"></div>
        <div id="bar3" class="bar bg-blue rounded-md"></div>
    </div>
    <div class="flex justify-between items-end w-full">
        <nav class="w-max">
            <div class="text-left list-none text-[5rem] tracking-wide w-max">
                <ul class="flex justify-start flex-start flex-col leading-none gap-5">
                    <li><a class="text-white hover:text-[#87C4FF] font-medium duration-300 cursor-pointer">Home</a>
                    </li>
                    <li class="dropdown spin-hover">
                        <a class="text-[#1EA0FF] hover:text-[#87C4FF] font-semibold duration-300 cursor-pointer">Service</a>
                        <i class="fa-solid fa-chevron-down spinn text-6xl" style="color: #ffffff;"></i>

                        <div>
                            <ul class="dropdown-nav text-4xl font-medium tracking-tight  w-max space-y-6">
                                <li><a class="text-gray-300  hover:text-white duration-300" href="">Development</a></li>
                                <li><a class=" text-gray-300 hover:text-white duration-300" href="">Designing</a></li>
                                <li><a class=" text-gray-300 hover:text-white duration-300" href="">Digital
                                        Marketing</a></li>
                                <li><a class=" text-gray-300 hover:text-white duration-300" href="">Content Writing</a>
                                </li>
                                <li><a class=" text-gray-300 hover:text-white duration-300" href="">Online
                                        Reputation</a></li>
                                <li><a class=" text-gray-300 hover:text-white duration-300" href="">Sales and
                                        Support</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="text-white hover:text-[#87C4FF] font-medium duration-300 cursor-pointer">About
                            Us</a>
                    </li>
                    <li><a class="text-white hover:text-[#87C4FF] font-medium duration-300 cursor-pointer">Career</a>
                    </li>
                    <li><a class="text-white hover:text-[#87C4FF] font-medium duration-300 cursor-pointer">Blog</a>
                    </li>
                    <li><a class="text-white hover:text-[#87C4FF] font-medium duration-300 cursor-pointer">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="w-max flex justify-start items-start flex-col bottom-[4rem]">
            <img src="<?php echo $mainUrl; ?>assets/client/images/logo.png" class="w-56 mb-8" alt="">
            <ul class="flex flex-col gap-2">
                <li class="text-white font-normal text-2xl">Facebook</li>
                <li class="text-white font-normal text-2xl">Instagram</li>
                <li class="text-white font-normal text-2xl">Twitter</li>
                <li class="text-white font-normal text-2xl">LinkedIn</li>
                <li class="text-white font-normal text-2xl">Facebook</li>
            </ul>
            <div class="flex gap-4 text-2xl items-center flex-col mt-6 text-white w-max ">
                <p class="font-medium">Lets Build You</p>

                <div class="">
                    <button class="bg-slate-200 font-medium text-base px-8 py-3 text-gray-800  duration-300 rounded-3xl">Start
                        Project</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navigation ends Here -->

<!-- Hero Banner Section -->
<section role="banner" id="targetDiv" class="h-screen overflow-hidden items-center justify-between gap-16 text-left lg:flex relative  px-5 sm:px-8 lg:px-0 w-full 2xl:px-[10vw] mx-auto">
    <div class="font-medium 2xl:py-20 flex flex-col justify-center">
        <h1 class="text-left sm:text-5xl lg:text-4xl 2xl:text-6xl text-head font-extrabold">Accelerate <br /> Your Business Growth With <br /> <span class="text-[#264CC5] italic font-extrabold"> Master Bazar.</span></h1>
        <p class="text-lg font-normal mt-5  text-[#334155] w-full">From Web Development to Digital Marketing, We'll Help You Grow Your Business at Lightning Speed. We understand how challenging it can be to sail through the vast sea of the digital world, which is why we are here to be your captain in your digital journey and bring growth to your business.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></h2>

            <a href=""><button role="button" class="mx-auto w-max py-3 px-8 font-bold mt-10 text-head bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] rounded-full">
                    <span class="button__label flex justify-center items-center gap-4">Boost Your Business
                        <span class="relative flex  h-[12px] w-[12px] ml-[-8px]">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#2563EB]  opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-[4px] w-[4px] bg-[#2563EB] ml-[4px] mt-[4px]"></span>
                        </span></span>
                </button>
            </a>
    </div>
    <div class="wrapper w-full relative flex justify-end items-center h-[100vh]">
        <div id="gradientblob" class="blob absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[450px]"></div>
        <div id="imageblob" class="blob absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[380px]"></div>
    </div>
    <div class="absolute bottom-0 right-0">
        <div class="relative">
            <div id="box1" class="absolute rounded-md bg-[#EB4925] h-56 w-56 right-32 -bottom-20 rotate-[20.92deg]"></div>
            <div id="box2" class="absolute rounded-md bg-[#2EF70D] h-56 w-56 right-12 -bottom-20 rotate-[40.92deg]"></div>
            <div id="box3" class="absolute rounded-md  h-56 w-56 -right-8 -bottom-16 rotate-[-94.03deg]"></div>
        </div>
    </div>
</section>
<!-- Hero Banner Section Ends Here! -->

<!-- Clients Logo Section Starts Here! -->
<?php include('./components/clientslogo.php'); ?>
<!-- Clients Logo Section ends Here! -->

<!-- Why Choose Section Starts From Here! -->
<section class="py-20 bg-slate-100 relative">
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <img class="" src="<?php echo $mainUrl; ?>assets/client/images/whycircle.png" alt="">
    </div>
    <div class="flex justify-between items-center gap-16 2xl:w-full 2xl:px-[10vw]">
        <div class="relative w-1/2">
            <div class="absolute right-0 top-16 bg-white rounded-full flex justify-center items-center text-xl px-12 py-3 shadow-xl">
                <p class=" font-bold text-gray-800">Conversion</p>
            </div>
            <img class="w-full -z-10" src="<?php echo $mainUrl; ?>assets/client/images/why_choose_us.svg" alt="">
        </div>
        <div class="w-1/2">
            <p class="text-blue text-2xl font-bold mb-2">Why Choose Us</p>
            <h4 class="text-head text-5xl font-black mb-5">Increase Your Client For Better
                Position
                of Pusiness</h4>
            <p class="text-lg font-normal mb-8"> Choosing Master Bazar as your digital marketing partner means
                putting
                your trust in a team of
                seasoned professionals with a track record of success. From increasing website traffic and
                engagement to driving conversions and revenue growth we have a proven track record of
                helping
                businesses achieve their digital marketing goals. Our customer-centric approach ensures that
                we
                understand your unique business needs and tailor our strategies to deliver measurable
                results.
                Partner with us to unlock the full potential of your brand's online presence.</p>
            <div class="flex justify-start items-center gap-4">
                <div class="bg-blue rounded-full w-12 h-12 flex justify-center items-center"> <i class="fa-solid fa-play text-2xl" style="color: #ffffff;"></i></div>
                <p class="text-blue text-xl font-bold"> Read Our Stories</p>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose us Section Ends Here -->
<!-- Testimonial Section Starts From Here -->
<?php include('./components/testimonial.php'); ?>
<!-- Testimonial Section Ends From Here -->


<!-- Project Slide Section Starts From Here -->
<?php include('./components/projectsSlide.php'); ?>
<!-- Project Slide Section Ends Here -->

<!-- Our Process Starts from here -->
<?php include('./components/ourProcess.php') ?>
<!-- Our Process Ends Here -->

<!-- FAQs Section Starts From Here -->
<section class="my-28 z-[40] bg-white py-20">
    <h4 class="text-center text-5xl mb-12 text-head font-black">Frequently Asked
        Question</h4>

    <div class="text-lg max-w-5xl mx-auto">
        <div class="my-5 flex justify-start items-center gap-5">
            <p class="bg-blue text-white rounded-md p-3 font-medium cursor-pointer">Lorem Lysem</p>
            <p class="faq-cat">Lorem Lysem</p>
            <p class="faq-cat">Lorem Lysem</p>
            <p class="faq-cat">Lorem Lysem</p>
        </div>
        <div class="space-y-6">
            <div class="bg-[#F8FAFC] p-10 rounded-xl space-y-6">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-right"></i>
                </div>
                <p class="font-normal">
                    Ut Enim Ad Minim veniam. Quis Nostrud Exercitation ullamco laboris Nisi Ut Aliquip Ex Fa
                    Commodo Consequat. Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum
                    Dolore Fu Fugiat Nulla Pariatur</p>
            </div>
            <div class="bg-[#F8FAFC] p-10 rounded-xl">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-down"></i>
                </div>
                <p></p>
            </div>
            <div class="bg-[#F8FAFC] p-10 rounded-xl">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts
                        And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-down"></i>
                </div>
                <p></p>
            </div>
            <div class="bg-[#F8FAFC] p-10 rounded-xl">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts
                        And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-down"></i>
                </div>
                <p></p>
            </div>
            <div class="bg-[#F8FAFC] p-10 rounded-xl">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts
                        And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-down"></i>
                </div>
                <p></p>
            </div>
        </div>
    </div>
</section>
<!-- FAQs Section Ends Here -->

<!-- this is a hamburger script -->
<script>
    function show() {
        document.querySelector('.hamburger').classList.
        toggle('open')
        document.querySelector('.navigation').classList.
        toggle('active')
    }
</script>

<!-- this is a script for blur -->
<script>
    document.getElementById('blurButton').addEventListener('click', function() {
        var targetDiv = document.getElementById('targetDiv');
        targetDiv.classList.toggle('filter-blur');
    });
</script>

<?php include('./components/cursor.php'); ?>
<?php include('./components/footer.php'); ?>