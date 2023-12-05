<header id="navbar" class="z-[95]" >
    <div class="flex justify-between items-center mx-[2vw] xl:mx-[10vw]">
        <div>
            <a href="<?php echo $mainUrl; ?>" class="z-[100] ">
                <div class="flex justify-start items-center gap-2 py-4">
                    <img src="<?php echo $mainUrl; ?>assets/client/images/masterbazar_logo.png" class="xl:w-20 w-10 xl:h-20 h-10" alt="masterbazar-logo">
                    <div class="">
                        <h4 class="2xl:text-4xl md:text-3xl text-2xl text-head font-extrabold">Master<span class="text-[#264CC5]">Bazar</span></h4>
                        <p class="text-xs text-head font-medium text-center">Masters of the digital world!</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="flex z-[100]">
            <div>
                <div class="hidden lg:flex justify-center items-center gap-4 mr-5">
                    <button role="button" class="mx-auto w-max py-3 px-5 2xl:px-8 font-bold text-white bg-blue rounded-full flex justify-center gap-4 items-center">
                        <span>Let's Have A Talk!
                        </span>
                        <span><i class="fa-solid fa-message text-xl text-white"></i></span>
                    </button>
                </div>
            </div>

            <div class="mr-10 xl:mr-0">
                <div id="blurButton" class="hamburger xl:top-[55px] cursor-pointer z-[99]">
                    <div id="bar1" class="bar bg-[#264CC5] rounded-md"></div>
                    <div id="bar2" class="bar bg-[#264CC5] w-1/2 rounded-md"></div>
                    <div id="bar3" class="bar bg-[#264CC5] rounded-md"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const menuBtn = document.getElementById("blurButton");
        menuBtn.addEventListener("click", navTransition);

        function navTransition() {
            document.querySelector(".hamburger").classList.toggle("open");
            document.querySelector(".navigation").classList.toggle("nav-active");
        }
    </script>
    <script>
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { // Adjust this value based on when you want the color to change
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</header>