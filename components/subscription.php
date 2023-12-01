<section class="mx-auto lg:max-w-5xl max-w-4xl">
    <div id="subscription" class="border-t-0 md:px-24 sm:px-12 px-4 py-8 my-24 rounded-md">
        <h2 class="sm:text-4xl text-3xl sm:font-medium font-semibold text-white text-center ">Subscribe to Our Newsletter!</h2>
        <p class="text-gray-200 text-center font-light sm:px-12 px-4 mb-8 mt-2 font-livvic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, voluptas expedita? Dicta molestiae, maxime minima ex saepe consequuntur.</p>
        
        <form action="<?php echo $mainUrl; ?>newsletter/subscribers.php" method="post">
            <div class="flex justify-center sm:flex-row flex-col sm:gap-5 gap-3 mb-5">
                <input type="email" name="email" id="email" placeholder="Type your email here" class="font-livvic bg-[#ffffff10] shadow-md py-3 px-4 w-full rounded">
                <button type="submit" class="bg-[#ffffff10] shadow-md  text-black transition-colors duration-300 hover:bg-black hover:text-white rounded ">
                    <p class="w-max px-16 py-3 text-gray-200 font-semibold">Join Us</p>
                </button>
            </div>
        </form>
    </div>
</section>

