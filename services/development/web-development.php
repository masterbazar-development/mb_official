<?php include('../../components/header.php'); ?>
<?php include('../../components/loader.php'); ?>
<?php include('../../components/navmenu.php');
include('../../mb-admin/config/dbcon.php'); ?>


<!-- Hero Banner Section -->
<section role="banner" class="bg-gradient-to-r from-slate-200 from-20% to-white to-70% lg:h-screen w-screen overflow-hidden">
  <div class="max-w-full  mx-[10vw]">
    <?php include('../../components/heroheader.php'); ?>

    <div class="lg:flex grid items-center justify-between 2xl:gap-16 gap-12 mb-12 mt-12 lg:mby-auto">
            <div class="font-medium order-2 lg:order-1 flex flex-col justify-center max-w-7xl mx-auto text-center">
                <img src="<?php echo $mainUrl; ?>assets/client/images/webdevbanner.png" class="w-[15rem] md:w-[45rem] mx-auto pt-10">
                <div class="md:block hidden">
                    <div class="flex justify-center max-w-5xl mx-auto mt-2">
                        <h1 class="2xl:text-5xl md:text-3xl text-xl text-head font-extrabold leading-snug">
                        Turn Your Vision 
                            <span class="text-[#264CC5] font-extrabold">into Reality</span>
                            
                        </h1>
                    </div>
                </div>

                <div class="md:hidden block">
                    <div class="flex max-w-5xl mx-auto mt-2">
                        <h1 class="2xl:text-6xl md:text-3xl text-2xl text-head font-extrabold leading-snug">
                        Turn Your Vision 
                            <span class="text-[#264CC5] font-extrabold">into Reality</span>
                        </h1>
                    </div>

                </div>
                <p class="md:text-lg font-livvic font-normal mt-5 text-[#334155] lg:px-40 w-full">Transforming Your Ideas into Powerful and Engaging Mobile Experiences, odio? Eveniet consequuntur tempore accusamus eum! Doloremque voluptatibus ea tenetur libero, facere expedita fuga a blanditiis. Illo veniam maxime.<br><span class="text-3xl xl:text-[2.9rem] font-medium"></span></p>
                <span class="text-center text-lg font-semibold underline text-head mt-4">Discuss Your Website Needs</span>
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
    <img src="<?php echo $mainUrl; ?>assets/client/images/webdevsec.jpg" alt="" class="w-full">
  </div>
  <div class="lg:w-[60%] my-auto">
    <h2 class="2xl:text-5xl text-2xl md:text-3xl text-head font-extrabold mt-5 lg:mt-0 leading-snug">Leading Innovation - Tailored Solutions for Your Digital Success</h2>
    <p class="md:text-lg font-livvic lg:text-lg xl:text-xl mt-5 ">
      At MasterBazar, we pride ourselves on being at the forefront of technological innovation, offering a comprehensive suite of development services that cater to diverse business needs. Our dedicated team of developers, designers, and tech enthusiasts collaborate seamlessly to craft tailored solutions that elevate your digital presence. With a keen focus on leveraging cutting-edge technology, we're committed to driving your business growth through personalized strategies and innovative development. Our goal is not just to meet your expectations but to exceed them, ensuring that each solution we create is meticulously designed to propel your brand towards unparalleled success in the digital sphere.
    </p>
  </div>
</section>

<!----------------- our services web development timeline starts here --------------------->
<section class="lg:flex max-w-full mt-16 md:mt-32 mx-[5vw] md:mx-[10vw]">
  <div class="parent lg:w-1/3">
    <div class="is-sticky  mb-10">
      <h2 class="lg:w-2/3 text-head text-4xl lg:text-6xl font-bold">What Do We Do</h2>
      <p class="text-sm mt-6 lg:w-2/3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, beatae explicabo consequuntur omnis rerum, saepe quos tempora dicta ratione repellendus debitis quae qui eum voluptates voluptatum id aliquam, atque quaerat!</p>
      <div class="flex items-center text-head text-xl mt-2 hover:translate-x-3 transition-transform duration-300 ">
        <p class="font-semibold">see our work </p>
        <p class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 4.5l15 15m0 0V8.25m0 11.25H8.25" />
          </svg></p>
      </div>
    </div>
  </div>

  <div class="lg:w-2/3">
    <div class="scroll-par flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">01</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Full Stack Development</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We do full stack development, we provide end-to-end development
          service for
          your website, including front end and back end with the latest tools, to create websites and web
          applications that are fast, secure, responsive, reliable, and user-friendly.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">02</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
        <p class="text-lg lg:text-3xl font-extrabold text-head">B to B Site Development</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">Whether you’re a wholesaler, manufacturer, or distributor, we
          develop websites that cater to the needs of businesses that sell products or services to other
          businesses to help them generate leads and showcase & scale their brand.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">03</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
        <p class="text-lg lg:text-3xl font-extrabold text-head">B to C Site Development</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">Whether you have an online store, entertainment platform, or sell
          services, you can count on MasterBazar to craft a website that is tailor-made for your D2C
          brand, that is engaging, attractive, and personalized for your business as well as your users.
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
        <p class="text-lg lg:text-3xl font-extrabold text-head">Ecommerce Site Development</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We can help you launch your own online store or marketplace, so
          you can sell products or services all around the world. We build complete e-commerce platforms
          with features including inventory management payment gateways and everything in-between.</p>
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
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">By conducting various tests and quality assurance activities, we
          ensure that your website or web application meets the highest standards of quality and
          performance. We detect and fix bugs, errors, or vulnerability to make your website flawless and
          secure.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">06</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Customize Web Application</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We make all types of customized web applications as per your
          specific business needs and specifications. Also, we can help you modify, enhance or upgrade
          your existing web applications as per your desired functionality and appearance.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-head w-10 md:w-16 lg:w-24">07</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-gradient-to-r from-[#2563EB33] to-[#7DA5FB33]">
        <p class="text-lg lg:text-3xl font-extrabold text-head">PHP Web Application Development</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1 ">We create a dynamic website using PHP, one of the most versatile
          programming languages known for its flexibility and easy integration. Our robust web application
          includes PHP frameworks like Laravel, Symfony, and CodeIgniter.</p>
      </div>
    </div>
    <div class="flex items-center my-6">
      <div>
        <h2 class="text-2xl md:text-4xl lg:text-6xl font-bold text-blue w-10 md:w-16 lg:w-24">08</h2>
      </div>
      <div class="relative bg-slate-700 h-52 w-[1px]">
      </div>
      <div class="webdev my-auto items-center w-full p-4 md:p-8 ml-4 md:ml-8 bg-white">
        <p class="text-lg lg:text-3xl font-extrabold text-head">Blogs/news</p>
        <p class="text-sm lg:text-lg font-livvic font-light mt-1">We create websites that help you attract, deliver, and engage
          your audience with your content such as blogs, news, and articles. We develop websites with
          quick navigation, SEO optimization, easy-to-use CMS, and much more.</p>
      </div>
    </div>

  </div>
</section>
<!----------------- our services web development timeline ends here --------------------->


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