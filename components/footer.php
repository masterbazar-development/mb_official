
<footer class="lg:text-left border-t-2 border-gray-400">
    <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
    <div class="mx-6 py-10 text-center flex justify-center md:text-left">
        <div class="max-w-screen-xl">
            <div class="grid-1 grid gap-4 lg:gap-32 md:grid-cols-3">
                <!-- Tailwind Elements section -->
                <div class="md:order-1 order-2 mb-6">
                    <h6 class="mb-8 text-2xl flex items-center justify-center font-extrabold text-gray-800 uppercase md:justify-start">
                        Follow Us
                    </h6>
                    <p class="mb-2 flex gap-5 justify-center md:justify-start">
                        <a href="https://www.instagram.com/themasterbazar?igshid=YmMyMTA2M2Y=" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-[#000] hover:fill-[#E4405F] hover:scale-150" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/themasterbazar" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-[#000] hover:fill-[#3b5998] hover:scale-150" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/themasterbazar?t=uRCSV95fXGDOPCOgA59lgg&amp;s=09" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-[#000] hover:fill-[#000000] hover:scale-150" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>

                        <a href="https://www.linkedin.com/company/masterbazar/" class=" ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-[#000] hover:fill-[#0077B5] hover:scale-150" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                            </svg>
                        </a>
                    </p>
                </div>
                <!-- Products section -->
                <div class="text-center grid items-center md:my-0 my-6 order-1 md:order-2">
    <a href="<?php echo $mainUrl; ?>" class=" ">

                        <img src="<?php echo $mainUrl ?>assets/client/images/Master.png" class="md:w-full  sm:w-[20rem]">
                    </a>
                </div>

                <div class="md:ml-[-2rem] lg:ml-[0rem] grid justify-center order-3">
                    <h6 class="md:mb-8 mb-3 text-2xl flex justify-center font-extrabold uppercase md:justify-start">
                        Contact Us
                    </h6>
                    <a href="mailto:info@masterbazar.com" class="flex items-start">
                        <img src="<?php echo $mainUrl ?>assets/client/images/envelop-for-footer.png" alt="" class="h-[27px]"> &nbsp;
                        <p class="mb-4 font-semibold flex items-center justify-center md:justify-start">
                            info@masterbazar.com
                        </p>
                    </a>


                    <a href="tel:+14434783833" class="flex items-start">
                        <img src="<?php echo $mainUrl ?>assets/client/images/usa-flag.png" class=" " alt=""> &nbsp;
                        <p class="mb-4 font-semibold flex items-center justify-center md:justify-start">
                            +1-443-478-3833
                        </p>
                    </a>

                    <a href="tel:+918209205305" class="flex items-start">
                        <img src="<?php echo $mainUrl ?>assets/client/images/indian-flag.png" class=" " alt=""> &nbsp;
                        <p class="mb-4 font-semibold flex items-center justify-center md:justify-start">
                            +91-820-920-5305
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center text-center justify-center border-t-2  p-6 bg-[#294397] lg:justify-center">
        <div class="lg:mr-12 ">
            <span class="sm:text-lg font-medium  text-white">Copyright @2022-23 | Master Bazar Pvt. Ltd. | All Rights Reserved</span>
        </div>
        <!-- Social network icons container -->
    </div>

</footer>

<div class="lg:visible hidden">
<?php include('../../components/cursor.php'); ?>
</div>

</body>

</html>
