<section class="navigation sm:h-screen h-full transition-all duration-700 w-full z-[90] fixed top-0 left-0 -translate-y-[100%] flex justify-start items-start sm:flex-row flex-col">
    <div class="lg:w-2/3 sm:w-1/2 w-full overflow-y-auto h-full 2xl:px-20  px-6 lg:py-0 py-8 sm:px-8  bg-[#DAE5FC] text-head flex lg:justify-center justify-start items-start flex-col">
        <div class="flex lg:flex-row flex-col lg:justify-between justify-start items-start w-full xl:gap-8 lg:gap-2 gap-4">
            <!-- <div class="sm:hidden flex justify-start items-center gap-2">

                <img src="<?php echo $mainUrl ?>assets/client/images/Master.png" class="md:w-full  sm:w-[20rem]">

                <div class="">
                    <h4 class="2xl:text-4xl sm:text-3xl text-2xl text-head font-extrabold">Master<span class="text-[#264CC5]">Bazar</span></h4>
                    <p class="text-xs text-head font-medium text-center">Masters of the digital world!</p>
                </div>
            </div> -->

            <nav class="2xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-extrabold flex justify-start items-start 2xl:gap-4 md:gap-2 flex-col mt-10 lg:mt-0">
                <a href="<?php echo $mainUrl; ?>">Home</a>
                <a href="<?php echo $mainUrl; ?>aboutus" class="text-blue">About Us</a>
                <a href="<?php echo $mainUrl; ?>career">Career</a>
                <a href="<?php echo $mainUrl; ?>blog">Blog</a>
                <a href="<?php echo $mainUrl; ?>contactus">Contact Us</a>

                <div class="lg:block hidden">
                    <h3 class="text-head font-extrabold text-2xl mt-10">Social Links
                        <nav class="text-blue mt-4">
                            <ul class="flex justify-start items-center flex-wrap 2xl:gap-4 gap-2">
                                <li class="text-blue font-normal text-xl 2xl:w-12 w-8 2xl:h-12 h-8 border-2 border-blue rounded-full flex justify-center items-center hover:scale-105 transition ease-in-out    duration-150">
                                    <a href="https://www.facebook.com/themasterbazar" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="text-blue font-normal text-xl 2xl:w-12 w-8 2xl:h-12 h-8 border-2 border-blue rounded-full flex justify-center items-center hover:scale-105 transition ease-in-out   duration-150">
                                    <a href="https://www.instagram.com/themasterbazar?igshid=YmMyMTA2M2Y=" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="text-blue font-normal text-xl 2xl:w-12 w-8 2xl:h-12 h-8 border-2 border-blue rounded-full flex justify-center items-center hover:scale-105 transition ease-in-out    duration-150">
                                    <a href="https://twitter.com/themasterbazar?t=uRCSV95fXGDOPCOgA59lgg&amp;s=09" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="text-blue font-normal text-xl 2xl:w-12 w-8 2xl:h-12 h-8 border-2 border-blue rounded-full flex justify-center items-center hover:scale-105 transition ease-in-out   duration-150">
                                    <a href="https://www.linkedin.com/company/masterbazar/" target="_blank">
                                        <i class="fab fa-linkedin-in "></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                </div>
            </nav>
            <nav class="2xl:text-2xl text-xl font-medium flex justify-start items-start flex-col">
                <h3 class="2xl:text-4xl md:text-3xl text-2xl text-blue font-extrabold 2xl:mb-4 mb-2">What We Do!</h3>
                <ul class="space-y-2">
                    <li> <a href="<?php echo $mainUrl; ?>services/development" class="font-bold halo">Development</a>
                        <ul class="2xl:text-xl text-lg">
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/development/software-development ">Software Development</a>
                            </li>
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/development/app-development ">Application Development</a>
                            </li>
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/development/web-development ">Website Development</a>
                            </li>
                        </ul>
                    </li>

                    <li> <a href="<?php echo $mainUrl; ?>services/designing" class="font-bold halo">Designing</a>
                        <ul class="2xl:text-xl text-lg">
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/designing/uiux">UI UX Designing</a>
                            </li>
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/designing/graphic">Graphics Designing</a>
                            </li>
                        </ul>
                    </li>

                    <li> <a href="<?php echo $mainUrl; ?>services/digital-marketing" class="font-bold halo">Digital Marketing</a>
                        <ul class="2xl:text-xl text-lg">
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/digital-marketing/seo">Search Engine Optimization</a>
                            </li>
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/digital-marketing/smm">Social Media Marketing</a>
                            </li>
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>services/digital-marketing/smo">Social Media Optimization</a>
                            </li>
                            <li>
                                <a class="halo" href="<?php echo $mainUrl; ?>/services/digital-marketing/paidads">Paid Adverstisment</a>
                            </li>
                        </ul>
                    </li>

                    <li> <a href="<?php echo $mainUrl; ?>services/sales-and-support" class="font-bold halo">Sales and Support</a></li>
                    <li> <a href="<?php echo $mainUrl; ?>services/content-writing" class="font-bold halo">Content Writing</a></li>
                </ul>
            </nav>
            <nav class="2xl:text-2xl text-xl font-medium flex justify-start items-start flex-col ">
                <h3 class="hidden md:block 2xl:text-4xl lg:text-3xl text-2xl xl:mb-4 mb-2 text-blue font-extrabold">Quick Links</h3>
                <a href="<?php echo $mainUrl; ?>terms" class="hidden md:block 2xl:text-xl text-lg font-bold halo">Terms and Conditions</a>
                <a href="<?php echo $mainUrl; ?>privacy" class="hidden md:block 2xl:text-xl text-lg font-bold halo">Privacy and Policy</a>
            </nav>
        </div>
    </div>
    </div>

    <div class="nav-part lg:w-1/3  w-full md:h-full  flex justify-center items-start gap-16 flex-col lg:px-10 px-6 sm:py-0 py-12">
        <div class="text-white">
            <div class="text-xl font-semibold text-gray-200">Got An Idea?</div>
            <div class="xl:text-4xl text-xl md:text-3xl mt-2 xl:mb-3 mb-2 font-extrabold">Let's Start Building the Projects!</div>
            <p class="hidden md:block font-light text-lg font-livvic">Kickstart your project journey with a single click: Start Project and dive into the world of possibilities and innovation!</p>
            <button class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] py-3 px-10 md:mt-8 shadow rounded-full tracking-wider font-medium flex justify-center items-center gap-4">
                <span>Start Project</span>
                <span><i class="fa-solid fa-play"></i></span>
            </button>
        </div>

        <div class="hidden md:block text-gray-200 font-livvic">
            <div class="flex justify-start items-start gap-4">
                <span><i class="fa-solid fa-location-dot text-2xl"></i></span>
                <span>
                    <p> P-67, 4th Floor, Pandav Nagar,</p>
                    <p> Mayur Vihar, East Delhi, 110091, </p>
                    <p>India</p>
                </span>
            </div>
        </div>
    </div>
</section>