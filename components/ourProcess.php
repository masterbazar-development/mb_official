

<h3 class="2xl:max-w-full 2xl:mx-[10vw] xl:max-w-7xl mx-auto 2xl:text-6xl md:text-5xl text-4xl backdrop-blur-md py-10 text-[#172554] text-start font-extrabold ">Our <span class="text-blue"> creative digital agency </span> designs and develops bespoke websites with <span class="text-blue"> three things in mind. </span></h3>

<div class="2xl:max-w-full 2xl:mx-[10vw] max-w-7xl mx-auto px-4">
        <div class="section gap-40 md:min-h-screen min-h-full md:mt-0 mt-6">
            <div class="section__img md:flex hidden">
                <div class="section__img__inner rounded-md" style="background-image: url(<?php echo $mainUrl; ?>assets/client/images/design2.jpg);"></div>
            </div>
            <div class="section__body md:flex-row flex-col md:w-1/2 w-full md:h-screen h-full">
                <div class="section__text">
                    <p class="text-head font-livvic font-medium text-4xl mb-2">01</p>
                    <h2 class="sm:text-5xl text-4xl font-extrabold sm:mb-4 mb-2 text-head">Research</h2>
                    <p class="sm:text-lg text-base text-gray-700 font-normal">
                        Developing stunning one-of-a-kind digital design that catches people's eye and brings your brand to
                        life online. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate aliquid facilis fugit. Ullam, illum dignissimos? Ducimus.</p>
                        <button class="py-3 px-12 font-livvic mt-6 rounded-full bg-blue text-white font-medium">Read More.</button>
                </div>
                <img src="<?php echo $mainUrl; ?>assets/client/images/Untitled.png" alt="" class="md:hidden block sm:mt-10 mt-4">
            </div>
        </div>
    
        <div class="section gap-40 md:min-h-screen min-h-full md:mt-0 mt-6">
            <div class="section__img md:flex hidden">
                <div class="section__img__inner rounded-md" style="background-image: url(<?php echo $mainUrl; ?>assets/client/images/design3.jpg);">
                </div>
            </div>
            <div class="section__body md:flex-row flex-col md:w-1/2 w-full md:h-screen h-full">
                <div class="section__text">
                <p class="text-head font-livvic font-medium text-4xl mb-2">02</p>
                    <h2 class="sm:text-5xl text-4xl font-extrabold sm:mb-4 mb-2 text-head">Design</h2>
                    <p class="sm:text-lg text-base text-gray-700 font-normal">
                        As a web design agency, we love to deliver meaningful and intuitive user experiences that build
                        trust with your target audience. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio iste quae non magnam perspiciatis, quam voluptatibus.</p>
                        <button class="py-3 px-12 font-livvic mt-6 rounded-full bg-blue text-white font-medium">Read More.</button>
                </div>
                <img src="<?php echo $mainUrl; ?>assets/client/images/Untitled1.png" alt="" class="md:hidden block sm:mt-10 mt-4">
            </div>
        </div>
    
        <div class="section gap-40 md:min-h-screen min-h-full md:mt-0 mt-6">
            <div class="section__img md:flex justify-center items-center hidden">
                <div class="section__img__inner rounded-md" style="background-image: url(<?php echo $mainUrl; ?>assets/client/images/design4.jpg);">
                </div>
            </div>
            <div class="section__body md:flex-row flex-col md:my-0 my-4 md:w-1/2 w-full md:h-screen h-full">
                <div class="section__text">
                <p class="text-head font-livvic font-medium text-4xl mb-2">03</p>
                    <h2 class="sm:text-5xl text-4xl font-extrabold sm:mb-4 mb-2 text-head">Development</h2>
                    <p class="sm:text-lg text-base text-gray-700 font-medium">
                        Designing tailor made solutions that resonate with your customers and drives
                        them to act. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ad, porro praesentium excepturi dolor quas voluptates?</p>
                        <button class="py-3 px-12 font-livvic mt-6 rounded-full bg-blue text-white font-medium">Read More.</button>
                </div>
                <img src="<?php echo $mainUrl; ?>assets/client/images/Untitled2.png" alt="" class="md:hidden block sm:mt-10 mt-4">
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(window).scroll(function() {

        // selectors
        var $window = $(window),
            $body = $('body'),
            $panel = $('.section');

        // Change 33% earlier than scroll position so colour is there when you arrive.
        var scroll = $window.scrollTop() + ($window.height() /2);

        $('.section').removeClass('active');

        $panel.each(function() {
            var $this = $(this);

            // if position is within range of this panel.
            // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
            // Remember we set the scroll to 33% earlier in scroll var.
            if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
                $this.addClass('active');

            }
        });

    }).scroll();
</script>