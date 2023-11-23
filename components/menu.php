<div class="navigation flex justify-between items-start gap-10 sm:px-16 px-6 xl:py-20 py-6">
    <div id="blurButton" class="hamburger top-8 right-8 cursor-pointer" onclick="show()">
        <div id="bar1" class="bar bg-[#264CC5] rounded-md"></div>
        <div id="bar2" class="bar bg-[#264CC5] w-1/2 rounded-md"></div>
        <div id="bar3" class="bar bg-[#264CC5] rounded-md"></div>
    </div>

    <!-- <div class="w-96 servicedropdown">
        <h3 class="text-4xl font-semibold text-white">Services We Provide!</h3>
        <p class="text-gray-200 mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo debitis dicta, doloremque voluptates nam molestias.</p>

        <ul class="mt-4 space-y-4 ">
            <li>
                <div class="bg-[#ffffff10] p-3 rounded">
                    <p class="text-2xl font-semibold text-white ">Development</p>
                    <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p>
                </div>
            </li>
            <li>
                <div class="bg-[#ffffff10] p-3 rounded">
                    <p class="text-2xl font-semibold text-white ">Designing</p>
                    <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p>
                </div>
            </li>
            <li>
                <div class="bg-[#ffffff10] p-3 rounded">
                    <p class="text-2xl font-semibold text-white ">Digital Marketing</p>
                    <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p>
                </div>
            </li>
            <li>
                <div class="bg-[#ffffff10] p-3 rounded">
                    <p class="text-2xl font-semibold text-white ">Content marketing</p>
                    <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p>
                </div>
            </li>
            <li>
                <div class="bg-[#ffffff10] p-3 rounded">
                    <p class="text-2xl font-semibold text-white ">Online Reputation</p>
                    <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p>
                </div>
            </li>
            <li>
                <div class="bg-[#ffffff10] p-3 rounded">
                    <p class="text-2xl font-semibold text-white ">Sales and Support</p>
                    <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p>
                </div>
            </li>
        </ul>
    </div> -->

    <div class="flex justify-between items-start flex-col h-full">
        <nav class="w-max">
            <img src="<?php echo $mainUrl; ?>assets/client/images/logo.png" class="w-56 mb-8" alt="" />
            <div class="text-left list-none text-3xl tracking-wide w-max">
                <ul class="flex justify-start flex-start flex-col leading-none gap-3">
                    <li><a href="<?php echo $mainUrl; ?>" class="text-white hover:text-[#87C4FF] font-semibold duration-300 cursor-pointer">Home</a>
                    </li>
                    <li class="dropdown dropdown1 spin-hover">
                        <a class="text-[#1EA0FF] hover:text-[#87C4FF] font-semibold duration-300 cursor-pointer">Service</a>
                        <i class="fa-solid fa-chevron-down spinn text-xl" style="color: #ffffff;"></i>

                        <div class="hidden lg:block w-94 h-screen  dropdown-nav1 p-8">
                            <h3 class="text-4xl font-semibold text-white">Services We Provide!</h3>


                            <ul class="mt-4 space-y-4">
                                <li class="bg-[#ffffff10] p-3 rounded dropdown11">
                                        <a class="text-2xl font-semibold text-white cursor-pointer">Development</a>
                                        <!-- <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p> -->
                                        <div class="hidden lg:block w-94 h-screen  dropdown-nav11 p-8">
                                            <h3 class="text-4xl font-semibold text-white">Development Services</h3>
                                            <ul class="mt-4 space-y-4 ">
                                                <li class="dropdown11">
                                                    <div class="bg-[#ffffff10] p-3 rounded">
                                                        <a class="text-2xl font-semibold text-white ">Web Development</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="bg-[#ffffff10] p-3 rounded">
                                                        <p class="text-2xl font-semibold text-white ">App Development</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="bg-[#ffffff10] p-3 rounded">
                                                        <p class="text-2xl font-semibold text-white ">Software Development</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                </li>
                                <li>
                                    <div class="bg-[#ffffff10] p-3 rounded">
                                        <p class="text-2xl font-semibold text-white ">Designing</p>
                                        <!-- <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="bg-[#ffffff10] p-3 rounded">
                                        <p class="text-2xl font-semibold text-white ">Digital Marketing</p>
                                        <!-- <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="bg-[#ffffff10] p-3 rounded">
                                        <p class="text-2xl font-semibold text-white ">Content marketing</p>
                                        <!-- <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="bg-[#ffffff10] p-3 rounded">
                                        <p class="text-2xl font-semibold text-white ">Online Reputation</p>
                                        <!-- <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="bg-[#ffffff10] p-3 rounded">
                                        <p class="text-2xl font-semibold text-white ">Sales and Support</p>
                                        <!-- <p class="text-xs text-gray-200 mt-1">Customized Web, App and Software Development Solutions across all major industries, perfectly suited to your business needs. We're committed to providing exceptional service and delivering results that exceed your expectations.</p> -->
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="">
                            <ul class="dropdown-nav text-xl font-medium w-max py-3 space-y-1">
                                <li><a class="text-white  hover:text-gray-300 duration-300" href="">Development</a></li>
                                <li><a class=" text-white hover:text-gray-300 duration-300" href="">Designing</a></li>
                                <li><a class=" text-white hover:text-gray-300 duration-300" href="">Digital
                                        Marketing</a></li>
                                <li><a class=" text-white hover:text-gray-300 duration-300" href="">Content Writing</a>
                                </li>
                                <li><a class=" text-white hover:text-gray-300 duration-300" href="">Online
                                        Reputation</a></li>
                                <li><a class=" text-white hover:text-gray-300 duration-300" href="">Sales and
                                        Support</a></li>
                            </ul>
                        </div>

                    </li>
                    <li><a href="<?php echo $mainUrl; ?>aboutus" class="text-white hover:text-[#87C4FF] font-semibold duration-300 cursor-pointer">About
                            Us</a>
                    </li>
                    <li><a class="text-white hover:text-[#87C4FF] font-semibold duration-300 cursor-pointer">Career</a>
                    </li>
                    <li><a href="<?php echo $mainUrl; ?>blog" class="text-white hover:text-[#87C4FF] font-semibold duration-300 cursor-pointer">Blog</a>
                    </li>
                    <li><a href="<?php echo $mainUrl; ?>contactus" class="text-white hover:text-[#87C4FF] font-semibold duration-300 cursor-pointer">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="w-max flex justify-start items-start flex-col bottom-[4rem] mt-8">

            <ul class="flex justify-start items-center flex-wrap gap-4">
                <li class="text-gray-300 font-normal text-xl w-12 h-12 border-2 border-gray-300 rounded-full flex justify-center items-center">
                    <a href="https://www.facebook.com/themasterbazar" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="text-gray-300 font-normal text-xl w-12 h-12 border-2 border-gray-300 rounded-full flex justify-center items-center">
                    <a href="https://www.instagram.com/themasterbazar?igshid=YmMyMTA2M2Y=" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="text-gray-300 font-normal text-xl w-12 h-12 border-2 border-gray-300 rounded-full flex justify-center items-center">
                    <a href="https://twitter.com/themasterbazar?t=uRCSV95fXGDOPCOgA59lgg&amp;s=09" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="text-gray-300 font-normal text-xl w-12 h-12 border-2 border-gray-300 rounded-full flex justify-center items-center">
                    <a href="https://www.linkedin.com/company/masterbazar/" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>


            <div class="flex gap-4 items-start flex-col mt-6 text-white w-full ">
                <p class="font-semibold  text-2xl">Lets Build You Business!</p>
                <div class="w-full">
                    <a href="<?php echo $mainUrl ?>project">
                        <button class="bg-slate-200 font-semibold text-base px-8 py-3 text-gray-800 w-full duration-300 rounded-3xl">Start
                            Project</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const services = document.querySelector('.dropdown');
    const servicedropdown = document.querySelector('.servicedropdown');

    services.addEventListener('click', function() {
        console.log(window.screen.width);
        if (window.screen.width >= '700') {
            servicedropdown.classList.toggle('service_dropdown');
        }
    });
</script>