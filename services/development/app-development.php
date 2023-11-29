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

<!-- Hero Banner Section -->

<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% lg:h-screen w-screen overflow-hidden">
    <div class="max-w-full  mx-[10vw]">
        <?php include('../../components/heroheader.php'); ?>

        <div class="lg:flex grid items-center justify-between 2xl:gap-16 gap-12 mb-12 mt-12 lg:mby-auto">
            <div class="font-medium order-2 lg:order-1 flex flex-col justify-center max-w-7xl mx-auto text-center">
                <img src="<?php echo $mainUrl; ?>assets/client/images/appbanner.png" class="w-[15rem] md:w-[45rem] mx-auto">
                <div class="md:block hidden">
                    <div class="flex max-w-5xl mx-auto mt-2">
                        <h1 class="2xl:text-5xl md:text-3xl text-xl text-head font-extrabold leading-snug">
                        Unlock New Possibilities with Innovative 
                            <span class="text-[#264CC5] font-extrabold">Mobile Solutions for Modern Businesses</span>
                            
                        </h1>
                    </div>
                </div>

                <div class="md:hidden block">
                    <div class="flex max-w-5xl mx-auto mt-2">
                        <h1 class="2xl:text-6xl md:text-3xl text-2xl text-head font-extrabold leading-snug">
                        Unlock New Possibilities with Innovative 
                            <span class="text-[#264CC5] font-extrabold">Mobile Solutions for Modern Businesses</span>
                        </h1>
                    </div>

                </div>
                <p class="md:text-lg font-livvic font-normal mt-5 text-[#334155] lg:px-40 w-full">Transforming Your Ideas into Powerful and Engaging Mobile Experiences, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></p>
                <span class="text-center text-lg font-semibold underline text-head mt-4">Lets Connect With Us</span>
            </div>

        </div>
    </div>
</section>

<style>
    @keyframes word {
        0% {
            transform: translateY(100%);
        }

        15% {
            transform: translateY(-10%);
            animation-timing-function: ease-out;
        }

        20% {
            transform: translateY(0);
        }

        40%,
        100% {
            transform: translateY(-110%);
        }
    }

    .animate-word {
        animation: word 4s infinite;
    }

    .animate-word-delay-1 {
        animation: word 4s infinite;
        animation-delay: -1.4s;
    }

    .animate-word-delay-2 {
        animation: word 4s infinite;
        animation-delay: -2.6s;
    }
</style>



<section class="lg:flex gap-20 max-w-full mx-[5vw] md:mx-[10vw] mt-20 md:mt-32">
  <div class="lg:w-[40%]">
    <img src="<?php echo $mainUrl; ?>assets/client/images/appdevsec.jpg" alt="" class="w-full">
  </div>
  <div class="lg:w-[60%] my-auto">
    <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold mt-5 lg:mt-0 leading-snug">Leading Innovation - Tailored Solutions for Your Digital Success</h2>
    <p class="md:text-lg font-livvic lg:text-lg xl:text-xl mt-5 ">
      At MasterBazar, we pride ourselves on being at the forefront of technological innovation, offering a comprehensive suite of development services that cater to diverse business needs. Our dedicated team of developers, designers, and tech enthusiasts collaborate seamlessly to craft tailored solutions that elevate your digital presence. With a keen focus on leveraging cutting-edge technology, we're committed to driving your business growth through personalized strategies and innovative development. Our goal is not just to meet your expectations but to exceed them, ensuring that each solution we create is meticulously designed to propel your brand towards unparalleled success in the digital sphere.
    </p>
  </div>

</section>



<!----------------- our services web development timeline starts here --------------------->
<section class="lg:flex max-w-full md:mt-32 mt-16 mx-[5vw] md:mx-[10vw]">
    <div class="parent lg:w-1/3">
        <div class="is-sticky  mb-10">
            <h2 class="lg:w-2/3 text-head text-4xl lg:text-6xl font-bold">What Do We Do</h2>
            <p class="text-sm mt-6 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, beatae explicabo consequuntur omnis rerum, saepe quos tempora dicta ratione repellendus debitis quae qui eum voluptates voluptatum id aliquam, atque quaerat!</p>
            <div class="flex items-center text-head text-xl mt-2 hover:translate-x-3 transition-transform duration-300">
                <p class="font-semibold">see our work </p>
                <p class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25" />
                    </svg></p>
            </div>
        </div>
    </div>

    <div class="lg:w-2/3 ">
        <div class="scroll-par flex items-center my-6">
            <div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">01</h2>
            </div>
            <div class="relative bg-slate-700 h-52 w-[1px]">
            </div>
            <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
                <p class="text-lg lg:text-3xl font-extrabold text-head">Hybrid App</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">Hybrid apps are a combination of native and web apps, the core of hybrid apps is made up of web technologies (HTML, CSS, and JavaScript) and is encased in a native app container, which makes it easier to develop and run on both Android and iOS</p>
            </div>
        </div>
        <div class="flex items-center my-6">
            <div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">02</h2>
            </div>
            <div class="relative bg-slate-700 h-52 w-[1px]">
            </div>
            <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
                <p class="text-lg lg:text-3xl font-extrabold text-head">Cross-platform App</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">Cross-platform apps can serve on multiple platforms thus eliminating the extra cost and time that is required to develop the app for other platforms. We can help you build cross-platform apps that provide your business with a wider reach, easier updates, and consistent user experience.</p>
            </div>
        </div>
        <div class="flex items-center my-6">
            <div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">03</h2>
            </div>
            <div class="relative bg-slate-700 h-52 w-[1px]">
            </div>
            <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
                <p class="text-lg lg:text-3xl font-extrabold text-head">Consultation & Strategy</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">We help you in defining each and every element of your app including app idea, scope, features, target market, monetization model, and development plan to make sure that your app fulfills all your requirements and takes your business to new heights.
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
                <p class="text-lg lg:text-3xl font-extrabold text-head">API Development</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">Application Programming Interface (API) connects your mobile app with other applications or services to add different types of functionalities to your app. We build safe & secure APIs that send and receive requests smoothly.</p>
            </div>
        </div>
        <div class="flex items-center my-6">
            <div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">05</h2>
            </div>
            <div class="relative bg-slate-700 h-52 w-[1px]">
            </div>
            <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
                <p class="text-lg lg:text-3xl font-extrabold text-head">Testing & QA</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">Through testing and quality assurance service, we check the functionality, performance, usability, and security standards of your app to make sure that your app is up to the standards to meet all the user requirements and expectations</p>
            </div>
        </div>
        <div class="flex items-center my-6">
            <div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">06</h2>
            </div>
            <div class="relative bg-slate-700 h-52 w-[1px]">
            </div>
            <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
                <p class="text-lg lg:text-3xl font-extrabold text-head">Cloud application</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">Cloud applications run on remote servers and they are often more scalable, flexible, and cost-efficient. Cloud applications are software solutions that are present on the web and can be accessed through the Internet.</p>
            </div>
        </div>
        <div class="flex items-center my-6">
            <div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">07</h2>
            </div>
            <div class="relative bg-slate-700 h-52 w-[1px]">
            </div>
            <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
                <p class="text-lg lg:text-3xl font-extrabold text-head">App Design</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">Whether you want a total revamp or slight adjustments to make your current website more productive, our web developers use the best skills to increase and improve your online portals.</p>
            </div>
        </div>
        <div class="flex items-center my-6">
            <div>
                <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">08</h2>
            </div>
            <div class="relative bg-slate-700 h-52 w-[1px]">
            </div>
            <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
                <p class="text-lg lg:text-3xl font-extrabold text-head">Native App</p>
                <p class="text-sm lg:text-lg font-livvic font-light mt-1">Native apps are the most commonly used apps, they are platform specific, developed for Android and iOS separately. Native apps are much faster than other apps and provide a better UI and smoother experience that adds to the user experience.</p>
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