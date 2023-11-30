

<h3 class="2xl:w-full xl:max-w-7xl mx-auto 2xl:text-6xl md:text-5xl text-4xl backdrop-blur-md py-10 text-[#172554] text-start font-extrabold md:mt-40 sm:mt-20 mt-10 md:mb-48 sm:mb-20 mb-10 px-2">Our <span class="text-blue"> creative digital agency </span> designs and develops bespoke websites with <span class="text-blue"> three things in mind. </span></h3>

<div class="2xl:max-w-full 2xl:mx-[10vw] max-w-7xl mx-auto px-4">
        <div class="section gap-40 md:min-h-screen min-h-full md:mt-0 mt-6">
            <div class="section__img md:flex hidden">
                <div class="section__img__inner" style="background-image: url(<?php echo $mainUrl; ?>assets/client/images/Untitled.png);"></div>
            </div>
            <div class="section__body md:flex-row flex-col md:w-1/2 w-full md:h-screen h-full">
                <div class="section__text">
                    <p class="text-head font-livvic font-medium text-4xl mb-2">01</p>
                    <h2 class="sm:text-5xl text-4xl font-extrabold sm:mb-4 mb-2 text-head">Beauty</h2>
                    <p class="sm:text-xl text-lg text-gray-700 font-medium">
                        Developing stunning one-of-a-kind digital design that catches people's eye and brings your brand to
                        life online.</p>
                </div>
                <img src="<?php echo $mainUrl; ?>assets/client/images/Untitled.png" alt="" class="md:hidden block sm:mt-10 mt-4">
            </div>
        </div>
    
        <div class="section gap-40 md:min-h-screen min-h-full md:mt-0 mt-6">
            <div class="section__img md:flex hidden">
                <div class="section__img__inner" style="background-image: url(<?php echo $mainUrl; ?>assets/client/images/Untitled1.png);">
                </div>
            </div>
            <div class="section__body md:flex-row flex-col md:w-1/2 w-full md:h-screen h-full">
                <div class="section__text">
                <p class="text-head font-livvic font-medium text-4xl mb-2">02</p>
                    <h2 class="sm:text-5xl text-4xl font-extrabold sm:mb-4 mb-2 text-head">Thought</h2>
                    <p class="sm:text-xl text-lg text-gray-700 font-medium">
                        As a web design agency, we love to deliver meaningful and intuitive user experiences that build
                        trust with your target audience.</p>
                </div>
                <img src="<?php echo $mainUrl; ?>assets/client/images/Untitled1.png" alt="" class="md:hidden block sm:mt-10 mt-4">
            </div>
        </div>
    
        <div class="section gap-40 md:min-h-screen min-h-full md:mt-0 mt-6">
            <div class="section__img md:flex hidden">
                <div class="section__img__inner" style="background-image: url(<?php echo $mainUrl; ?>assets/client/images/Untitled2.png);">
                </div>
            </div>
            <div class="section__body md:flex-row flex-col md:my-0 my-4 md:w-1/2 w-full md:h-screen h-full">
                <div class="section__text">
                <p class="text-head font-livvic font-medium text-4xl mb-2">03</p>
                    <h2 class="sm:text-5xl text-4xl font-extrabold sm:mb-4 mb-2 text-head">Impact</h2>
                    <p class="sm:text-xl text-lg text-gray-700 font-medium">
                        Designing tailor made solutions that resonate with your customers and drives
                        them to act.</p>
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