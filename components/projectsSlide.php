<!-- <!-- <section class="w-full flex justify-content items-center">
    <div id="screen" class="bgscreen w-1/2 h-[100vh] bg-red-300 flex justify-center items-center p-20 overflow-hidden">
        <div id="project" class="bgscreen flex justify-center items-center ">
            <div id="lap-screen" class="bgscreen w-[50rem] h-[30rem] rounded-2xl"></div>
            <div id="mobile-screen" class="bgscreen w-[20rem] h-[35rem] rounded-2xl absolute right-0 shadow-2xl"></div>
        </div>
    </div>

    <div class="flex justify-start items-center gap-5 flex-col w-1/2 px-20">
        <h3 class="text-6xl text-gray-800 font-extrabold">Making brands a damn site better</h3>
        <p class="text-lg font-semibold text-gray-700">Let’s face it, first impressions matter. Your website’s an opportunity to wow your audience, so why waste it with bad design? Because brands win new fans when they’re brave enough to go beyond their creative comfort zone.</p>
    </div>
</section> -->



<!------------ this css is for client project image slider-------- -->
<style>
    /* @keyframes mouvement {
        0% {
            left: 100%;
            opacity: 1;
        }

        20% {
            left: 0;
            opacity: 1;
        }

        40% {
            left: -100%;
            opacity: 1;
        }

        100% {
            left: -100%;
            opacity: 0;
        }
    }

    img:nth-child(2) {
        animation-delay: 4s;
    }

    img:nth-child(3) {
        animation-delay: 8s;
    }

    img:nth-child(4) {
        animation-delay: 12s;
    }

    img:nth-child(5) {
        animation-delay: 16s;
    }

    .containerrs {
        position: relative;
        overflow: hidden;
        width: 50vw;
        height: 85vh;
        display: flex;
        /* background-image: url('./assets/client/images/project/bgblur1.jpeg'); */
        /* Initial background image */
        /* transition: background-image 0.5s ease; */
        /* Smooth transition */
    

/*
    .clientproject {
        width: 100%;
        height: 100%;
        left: 100%;
        opacity: 1;
        position: absolute;
        animation: mouvement 12s ease-in-out infinite;
    } */
</style> 



<!------------ this section flex div is for cliet project image slider and heading text -------------------->
<!-- <section class="flex justify-center mx-auto h-screen">
    <div class="containerrs">
        <img class="clientproject" src="<?php echo $mainUrl ?>assets/client/images/project/Untitled design (47).png" alt="" class="image1">
        <img class="clientproject" src="<?php echo $mainUrl ?>assets/client/images/project/Untitled design (48).png" alt="">
        <img class="clientproject" src="<?php echo $mainUrl ?>assets/client/images/project/Untitled design (51).png" alt="">
        <img class="clientproject" src="<?php echo $mainUrl ?>assets/client/images/project/Untitled design (47).png" alt="">
        <img class="clientproject" src="<?php echo $mainUrl ?>assets/client/images/project/Untitled design (48).png" alt="">
    </div>
    <div class="items-center w-1/2 my-auto px-28">
        <h2 class="text-[#172554] text-5xl font-extrabold mb-4">Make Brands A Damn Site Better</h2>
        <p class="font-livvic font-medium">Let’s face it, first impressions matter. Your website’s an opportunity to wow your audience, so why waste
            it with bad design? Because brands win new fans when they’re brave enough to go beyond their creative
            comfort zone.</p>
    </div>
</section> -->


<!------------- this script is fot the background images changing in the image box ---------------------->
<!-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const containerrs = document.querySelector(".containerrs");
        const images = ['bgblur2.jpeg', 'bgblur1.jpeg', 'bgblur2.jpeg']; // Add more image URLs as needed
        let currentIndex = 0;
        const path = './assets/client/images/project/';

        function changeBackgroundImage() {
            containerrs.style.backgroundImage = `url(${path}${images[currentIndex]})`;
            currentIndex = (currentIndex + 1) % images.length;
        }

        // Change the background image every 3 seconds (adjust as needed)
        setInterval(changeBackgroundImage, 3000);
    });
</script> -->

<!-- <script>
    const project = document.getElementById('project');
    const lapscreen = document.getElementById('lap-screen');
    const mobileScreen = document.getElementById('mobile-screen');
    const screen = document.getElementById('screen');
    const slides_data = [{
            bg: "bg",
            bgBigScreen: "trinity_pc",
            bgSmallScreen: "trinity-mobile"
        },
        {
            bg: "bg",
            bgBigScreen: "deca1",
            bgSmallScreen: "deca1-mobile"
        },
        {
            bg: "bg",
            bgBigScreen: "mb_screen",
            bgSmallScreen: "mb_mobile"
        },
        {
            bg: "bg",
            bgBigScreen: "printer_router",
            bgSmallScreen: "router-mobile"
        }];

    let currentSlideIndex = 0;
    const slideTransitionDuration = "1000ms";

    const changeSlide = () => {
        if(currentSlideIndex >= slides_data.length) currentSlideIndex = 0;

        const imagepath = "http://localhost/masterbazar/assets/client/images/project/";
        screen.style.background = `linear-gradient(60deg, rgb(37, 99, 235, 0.5), rgb(125, 165, 251, 0.2)), url(${imagepath}${slides_data[currentSlideIndex].bg}.jpg)`;
        lapscreen.style.backgroundImage = `url(${imagepath}${slides_data[currentSlideIndex].bgBigScreen}.png)`;
        mobileScreen.style.backgroundImage = `url(${imagepath}${slides_data[currentSlideIndex].bgSmallScreen}.png)`;

        project.classList.replace('hidden', 'flex');
        project.style.transform = "translateX(0)";
        project.style.transition = "transform 1500ms ease-in-out";
        setTimeout(() => {
            project.style.transform = "translateX(-200%)";
            setTimeout(() => {
            project.classList.replace('flex', 'hidden');
            project.style.transform = "translateX(200%)";
        }, 1500) 
        }, 1500);
        currentSlideIndex++;
    }

     document.addEventListener('DOMContentLoaded', function() {
        changeSlide();
        setInterval(changeSlide, 4000);
    });

</script> -->

<section class=" bg-slate-200 py-28">
    <h3 class="text-center text-5xl font-extrabold text-head">Making brands a damn site better</h3>
    <p class="text-center text-gray-700 font-livvic max-w-4xl mx-auto mb-6 mt-2">Let’s face it, first impressions matter. Your website’s an opportunity to wow your audience, so why waste it with bad design? Because brands win new fans when they’re brave enough to go beyond their creative comfort zone.</p>
    <div class=" max-w-7xl mx-auto flex justify-center items-center flex-wrap gap-8">
    <img src="<?php echo $mainUrl; ?>assets/client/images/project/deca-mobile.png" class="rounded-md w-56" alt="">
    <img src="<?php echo $mainUrl; ?>assets/client/images/project/trinity-mobile.png" class="rounded-md w-56" alt="">
    <img src="<?php echo $mainUrl; ?>assets/client/images/project/trinity-mobile.png" class="rounded-md w-56" alt="">
   <img src="<?php echo $mainUrl; ?>assets/client/images/project/trinity-mobile.png" class="rounded-md w-56" alt="">
    <img src="<?php echo $mainUrl; ?>assets/client/images/project/deca-mobile.png" class="rounded-md w-56" alt="">
    </div>
</section>