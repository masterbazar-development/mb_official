<div id="blurButton" class="hamburger top-8 right-8 cursor-pointer z-[99]">
        <div id="bar1" class="bar bg-[#264CC5] rounded-md"></div>
        <div id="bar2" class="bar bg-[#264CC5] w-1/2 rounded-md"></div>
        <div id="bar3" class="bar bg-[#264CC5] rounded-md"></div>
    </div>

<script>
    const menuBtn = document.getElementById('blurButton');
    menuBtn.addEventListener('click', navTransition);  

    function navTransition(){
        document.querySelector('.hamburger').classList.
        toggle('open');
        document.querySelector('.navigation').classList.toggle('nav-active');
    }
</script>
