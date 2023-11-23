
<div class=" p-3 md:p-8 mt-10 lg:mt-0 bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33] ">
    <h6 class="text-head text-2xl font-bold"><span class="border-t-2  border-blue">About</span> US</h6>
    <p class=" text-gray-700 text-md pt-4">Our blog is your go-to source for staying on top of the latest developments in digital marketing, web & development, and more. Get insights, analysis, and advice from our experts. Here we share valuable insights, tips, and strategies to help businesses excel in their sales and support efforts. </p>
</div>
<div class="sticky top-0">
    <!-- Newsletter -->
    <div class="p-3 md:p-8 mt-6  bg-slate-200">
        <h6 class="text-head text-2xl font-bold mb-2">Email Newsletter</h6>
        <hr class="border-t-1 border-blue duration-700 ease-in-out">
        <p class=" text-gray-800 font-semibold text-center py-3">Subscribe to recieve inspiration, ideas, and news in your inbox.</p>
        <form method="post" action="../newsletter/subscribers.php" enctype="multipart/form-data">
            <div class="flex justify-start items-center flex-col sm:flex-row gap-3 sm:gap-6  md:gap-12 my-4 md:my-6 trigger4">
                <div class="w-full">
                    <input type="email" class="text-md font-light   w-full px-4 py-2 rounded text-head blur-10 focus-visible:border-none focus:border-none outline-none" id="email" name="subscriber-email" placeholder="Write your Email here" required>
                </div>
                <div class="w-max">
                    <button name="submit-btn" value="submit" class="bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33]  button2 text-head  text-base xl:text-lg font-normal hover:font-normal py-1 px-3 xl:px-3  hover:scale-[1.05] hover:ease-linear hover:duration-100 transition-all">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Recent Blogs -->
    <div class="eve">
    <?php include('recent-blogs.php'); ?>
    </div>
</div>


