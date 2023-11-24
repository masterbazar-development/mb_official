<?php include('./components/header.php'); ?>
<?php include('./components/loader.php'); ?>


<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 sm:-right-40 -right-40 z-[99]">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<?php include('./components/menu.php'); ?>
<!-- Navigation ends Here -->

<!-- Hero Banner Section -->
<section id="targetDiv" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% h-screen  w-screen overflow-hidden">
    <div class="2xl:max-w-full xl:max-w-7xl lg:max-w-6xl  2xl:mx-[10vw] mx-auto px-4 h-full">
        <header class="flex justify-between items-center">
            <div class="flex justify-start items-center gap-2 py-4">
                <img src="<?php echo $mainUrl; ?>assets/client/images/masterbazar_logo.png" class="2xl:w-20 w-16 2xl:h-20 h-16" alt="masterbazar-logo">
                <div class="">
                    <h4 class="2xl:text-4xl text-3xl text-head font-extrabold">Master<span class="text-[#264CC5]">Bazar</span></h4>
                    <p class="text-xs text-head font-medium text-center">Masters of the digital world!</p>
                </div>
            </div>

            <div class="sm:flex hidden justify-center items-center gap-4">
                <button role="button" class="mx-auto w-max py-3 px-8 font-bold text-head bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] rounded-full flex justify-center gap-4 items-center">
                    <span>Let's Have A Talk!
                    </span>
                    <span><i class="fa-solid fa-message text-xl text-blue"></i></span>
                </button>
            </div>
        </header>

        <div class="flex lg:items-center items-end h-full lg:justify-between justify-end lg:flex-row flex-col 2xl:gap-16 lg:gap-8 lb:pb-0 pb-40">
            <div class="font-medium 2xl:py-20 flex flex-col justify-center">
                <h1 class="text-left 2xl:text-6xl md:text-5xl text-4xl text-head md:font-extrabold sm:font-black font-semibold">Accelerate <br /> Your Business Growth With <br /> <span class="text-[#264CC5] italic md:font-extrabold sm:font-black font-extrabold"> Master Bazar.</span></h1>
                <p class="sm:text-lg font-livvic font-normal mt-5  text-[#334155] w-full">From Web Development to Digital Marketing, We'll Help You Grow Your Business at Lightning Speed. We understand how challenging it can be to sail through the vast sea of the digital world, which is why we are here to be your captain in your digital journey and bring growth to your business.</p>

                    <a href=""><button class="mx-auto w-max py-3 px-8 font-bold md:mt-10 mt-6 text-head bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] rounded-full">
                            <span class="button__label flex justify-center items-center gap-4">Boost Your Business
                                <span class="relative flex  h-[12px] w-[12px] ml-[-8px]">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#2563EB]  opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-[4px] w-[4px] bg-[#2563EB] ml-[4px] mt-[4px]"></span>
                                </span>
                            </span>
                        </button>
                    </a>
            </div>
            <div class="wrapper w-full relative lg:flex hidden justify-end items-center lg:h-[100vh]">
                <div id="gradientblob" class="blob absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 2xl:w-[500px] xl:w-[400px] lg:w-[300px] 2xl:h-[500px] xl:h-[400px] lg:[300px]"></div>
                <div id="imageblob" class="blob absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 2xl:w-[450px] xl:w-[350px] lg:w-[250px] 2xl:h-[450px] xl:h-[350px] lg:h-[250px]"></div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Banner Section Ends Here! -->

<!-- Why Choose Section Starts From Here! -->
<section id="whychoose" class="pt-40 pb-28 bg-white relative">
    <div class="absolute md:top-1/3 top-2/3 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <img class="" src="<?php echo $mainUrl; ?>assets/client/images/whycircle.png" alt="">
    </div>
    <div class="flex justify-between items-center md:flex-row flex-col xl:gap-16 gap-8 2xl:max-w-full xl:max-w-7xl mx-auto px-4 2xl:px-[10vw]">
        <div class="relative md:w-1/2">
            <div class="absolute right-0 top-16 bg-white rounded-full flex justify-center items-center text-xl px-12 py-3 shadow-xl">
                <p class=" font-bold text-gray-800">Conversion</p>
            </div>
            <img class="w-full -z-10" src="<?php echo $mainUrl; ?>assets/client/images/why_choose_us.svg" alt="">
        </div>
        <div class="md:w-1/2">
            <p class="text-blue lg:text-2xl text-xl font-bold mb-2">Why Choose Us</p>
            <h4 class="text-head xl:text-5xl sm:text-4xl text-3xl font-extrabold xl:leading-tight leading-none mb-5">Increase Your Client For Better
                Position
                of Business</h4>
            <p class="sm:text-lg font-livvic font-normal mb-8"> Choosing Master Bazar as your digital marketing partner means
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

<script>
     function debounce(func, wait) {
      let timeout;
      return function() {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, arguments), wait);
      };
    }

    document.addEventListener('DOMContentLoaded', function() {
      let sec_first = document.getElementById('targetDiv');
      let sec_second = document.getElementById('whychoose');

      function handleScroll() {
        if (sec_first.getBoundingClientRect().top <= -50) {
          sec_first.style.height = 0;
        } else if (sec_second.getBoundingClientRect().top === 0) {
          sec_first.style.height = '100vh';
        }
      }

      // Use the debounced version of the scroll event handler
      window.addEventListener('scroll', debounce(handleScroll, 200));
    });
</script>

<!-- Clients Logo Section Starts Here! -->
<?php include('./components/clientslogo.php'); ?>
<!-- Clients Logo Section ends Here! -->





<!-- Testimonial Section Starts From Here -->
<?php include('./components/testimonial.php'); ?>
<!-- Testimonial Section Ends From Here -->


<!-- Project Slide Section Starts From Here -->
<?php //include('./components/projectsSlide.php'); ?>
<!-- Project Slide Section Ends Here -->

<?php include('./components/ourservices.php'); ?>

<!-- Our Process Starts from here -->
<?php include('./components/ourProcess.php') ?>
<!-- Our Process Ends Here -->

<?php include('./components/blogsSection.php') ?>

<!-- FAQs Section Starts From Here -->
<section class="sm:my-28 my-10 z-[40] bg-white py-20">
    <h4 class="text-center md:text-5xl text-4xl sm:mb-12 mb-6 text-head font-extrabold">Frequently Asked
        Question</h4>

    <div class="sm:text-lg max-w-5xl mx-auto">
        <div class="space-y-6">
            <div class="bg-[#F8FAFC] sm:p-10 p-3 rounded-xl space-y-6">
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
            <div class="bg-[#F8FAFC] sm:p-10 p-3 rounded-xl">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-down"></i>
                </div>
                <p></p>
            </div>
            <div class="bg-[#F8FAFC] sm:p-10 p-3 rounded-xl">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts
                        And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-down"></i>
                </div>
                <p></p>
            </div>
            <div class="bg-[#F8FAFC] sm:p-10 p-3 rounded-xl">
                <div class="w-full flex justify-between">
                    <h4 class="font-semibold">
                        Commonly Used In The Graphic, Print, And Publishing Industries For Previewing
                        Layouts
                        And
                        Visual Mockups.</h4><i class="fa-solid fa-chevron-down"></i>
                </div>
                <p></p>
            </div>
            <div class="bg-[#F8FAFC] sm:p-10 p-3 rounded-xl">
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

<!-- Contact us Starts from here -->
<?php include('./components/ContactUs.php'); ?>
<!-- Contact us Ends Here -->


<!-- Subscribe to us Starts from here -->
<?php include('./components/subscription.php'); ?>
<!-- Subscribe to us Ends Here -->

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