<!-- <section id="loader" class="fixed top-0 left-0 w-screen h-screen z-[999]">
    <div id="loading-screen" class=" h-screen overflow-hidden flex justify-center items-center relative">
        <div class="fixed z-[99] -translate-y-24">
            <p class="italic text-gray-200 font-extrabold text-center text-7xl">MasterBazar</p>
            <p class="capitalize text-gray-200 text-lg text-center font-normal tracking-wide">Masters of the digital world!</p>
        </div>
        <div class="flex justify-center items-center gap-6">
            <div id="ball3" class="ball w-6 h-6 rounded-full"></div>
            <div id="ball2" class="ball w-6 h-6 rounded-full relative"></div>
            <div id="ball1" class="ball w-6 h-6 rounded-full"></div>
        </div>
    </div>
</section>

<script>
    const element = (id) => document.getElementById(id);
    const ball3 = element('ball3');
    const ball2 = element('ball2');
    const ball1 = element('ball1');
    const loader = element('loader');
    const loadscreen = element('loading-screen');

    document.addEventListener('DOMContentLoaded', function() {
        const balls = document.querySelectorAll('.ball');
        balls.forEach((ball, index) => {
            ball.style.transform = 'translateY(0)';
        });
        setTimeout(() => {
            ball2.style.width = "150vw";
            ball2.style.height = "150vh";
            setTimeout(() => {
                loadscreen.style.height = "0";
                setTimeout(() => {loader.style.display = "none"}, 1000)
            }, 1200)
        }, 1000);
    });
</script> -->