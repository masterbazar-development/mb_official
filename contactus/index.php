<?php include('../components/header.php'); ?>
<?php include('../components/loader.php'); ?>

<!-- Ellipse Starts From Here -->
<img src="<?php echo $mainUrl; ?>assets/client/images/ellipse.png" class="fixed -top-60 sm:-right-40 -right-40 z-[99]">
<!-- Ellipse ends Here -->

<!-- Navigation starts from Here -->
<?php include('../components/menu.php'); ?>
<!-- Navigation ends Here -->

<div class="justify-center flex">
    <div class="container mx-auto max-w-7xl px-0">
        <?php include('../components/heroheader.php'); ?>
    </div>
</div>
<!-- main content -->
<div class="flex h-[65vh] items-center justify-center bg-[#294497] font-bold text-white">
  <div class=" text-center space-y-12">
      <div class="text-center text-5xl font-bold">
       Connect With Us For
        <div class="relative inline-grid grid-cols-1 grid-rows-1 gap-12 overflow-hidden">
        <span class="animate-word col-span-full row-span-full !text-start">Development</span>
        <span class="animate-word-delay-1 col-span-full row-span-full !text-start">Design</span>
        <span class="animate-word-delay-2 col-span-full row-span-full !text-start">SEO</span>
        <span class="animate-word-delay-3 col-span-full row-span-full !text-start">Digital Marketing</span>
        <span class="animate-word-delay-4 col-span-full row-span-full !text-start">Careers</span>
        </div>
    </div>
    <p class=" text-white font-livvic">
        Want to hire me for work ping me <a class="underline" href="#">mail here</a>
    </p>
  </div>
</div>

<style>

@keyframes word {
  0% {
    transform: translateY(100%);
  }
  15% {
    transform: translateY(-10%);
    animation-timing-function: ease-out;
  }

  20% {
    transform: translateY(0);
  }

  40%,
  100% {
    transform: translateY(-110%);
  }
}

.animate-word {
  animation: word 7s infinite;
}
.animate-word-delay-1 {
  animation: word 7s infinite;
  animation-delay: -1.4s;
}
.animate-word-delay-2 {
  animation: word 7s infinite;
  animation-delay: -2.8s;
}
.animate-word-delay-3 {
  animation: word 7s infinite;
  animation-delay: -4.2s;
}
.animate-word-delay-4 {
  animation: word 7s infinite;
  animation-delay: -5.6s;
}
</style>



<!-- description -->

<section class="">
    <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">
        <h2 class="max-w-2xl mx-auto text-5xl font-bold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
            Get in Touch Today and Let's Create <span class="text-[#294497]">Something Extraordinary.</span>
        </h2>

        <p class="max-w-4xl mt-6 text-center text-gray-900 dark:text-gray-300 font-livvic">
            Lorem, ipsum dolor sit amet consectetur
            adipisicing elit. Cum quidem officiis reprehenderit, aperiam veritatis non, quod veniam fuga possimus hic
            explicabo laboriosam nam. A tempore totam ipsa nemo adipisci iusto!
        </p>
        <p class="max-w-4xl mt-4 text-center text-gray-900 dark:text-gray-300 pb-10">
            Please fill out the form below and we will get back to you as soon as possible. We value your time and strive to provide quick responses to all inquiries.
        </p>
    </div>
</section>

<!-- form -->
<section class="flex justify-center md:flex-row flex-col md:gap-6 gap-12 max-w-7xl mx-auto">
    <div class="md:w-1/2 md:mx-0 sm:mx-8 mx-4">
        <div class="responsive-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14010.766499127663!2d77.2919306!3d28.6090266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3181e5fef5d%3A0x17a776446f5d945e!2sMaster%20Bazar%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1699517538650!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="flex mt-4 gap-8">
            <div class="w-1/2">
                <h2 class="text-3xl font-extrabold mt-5 text-[#294497] ">INDIA</h2>
                <p class="text-lg max-w-2/3 mt-2 font-livvic">P-67, Top Floor, Block E Pandav Nagar Rd, Block P, Mayur Vihar,
                    New
                    Delhi, Delhi, 110091</p>
            </div>
            <div class="w-1/2">
                <h2 class="text-3xl font-extrabold mt-5 text-[#294497]">America</h2>
                <p class="text-lg max-w-2/3 mt-2 font-livvic">+1-443-478-3833</p>
            </div>
        </div>
    </div>

    <div class="md:w-1/2">
        <div class="flex items-center ">
            <div class="container mx-auto">
                <div class="max-w-xl mx-auto bg-white shadow-sm">
                    <div class="text-center">
                        <h1 class="mb-3 text-4xl font-bold text-head ">
                            Contact Us
                        </h1>
                        <p class="text-gray-400 dark:text-gray-400 font-livvic">
                            Fill up the form below to send us a message.
                        </p>
                    </div>
                    <div class="m-7">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form" class="needs-validation" novalidate>
                            <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
                            <input type="hidden" name="subject" value="New Submission from Web3Forms" />
                            <input type="checkbox" name="botcheck" id="" style="display: none;" />

                            <div class="sm:flex mb-6 sm:space-x-4">
                                <div class="w-full md:w-1/2">
                                    <label for="fname" class="block text-sm text-gray-600 dark:text-gray-400 font-semibold">
                                        Name</label>
                                    <input type="text" name="name" id="first_name" placeholder="John Legend" required class="font-livvic w-full px-3 py-2 placeholder-gray-300 border-b-2 border-gray-200  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                        Please provide your first name.
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 sm:mt-0 mt-2">
                                    <label for="email" class="block text-sm text-gray-600 dark:text-gray-400 font-semibold">Email
                                        Address</label>
                                    <input type="email" name="email" id="email" placeholder="you@company.com" required class="font-livvic w-full px-3 py-2 placeholder-gray-300 border-b-2 border-gray-200 focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                                    <div class="empty-feedback text-red-400 text-sm mt-1">
                                        Please provide your email address.
                                    </div>
                                    <div class="invalid-feedback text-red-400 text-sm mt-1">
                                        Please provide a valid email address.
                                    </div>
                                </div>
                            </div>

                            <div class="sm:flex mb-6 sm:space-x-4">
                                <div class="w-full md:w-1/2">
                                    <label for="service" class="block text-sm text-gray-600 dark:text-gray-400 font-semibold">Select Your
                                        Service</label>
                                    <div class="select py-2 placeholder-gray-300 border-b-2 border-gray-200 focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                                        <select name="format" id="format" class="text-black font-livvic">
                                            <option selected disabled>Choose Service</option>
                                            <option value="soft">Software Development</option>
                                            <option value="webd">Website Designing</option>
                                            <option value="digi">Digital Marketing</option>
                                            <option value="webapp">Web Application Development</option>
                                            <option value="appmain">Application Maintenance</option>
                                            <option value="ecom">E-Commerce Solution</option>
                                            <option value="webr">Website Redesigning</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 sm:mt-0 mt-2">
                                    <label for="phone" class="block text-sm text-gray-600 dark:text-gray-400 font-semibold">Phone
                                        Number</label>
                                    <input type="text" name="phone" id="phone" placeholder="+91 986XXXXXXX" required class="font-livvic w-full px-3 py-2 placeholder-gray-300 border-b-2 border-gray-200 focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />

                                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                        Please provide your phone number.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block text-sm text-gray-600 dark:text-gray-400 font-semibold">Your
                                    Message</label>

                                <textarea rows="5" name="message" id="message" placeholder="Your Message" class="font-livvic w-full px-3 py-2 placeholder-gray-300 border-b-2 border-gray-200 focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" required></textarea>
                                <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                                    Please enter your message.
                                </div>
                            </div>
                            <div class="mb-6">
                                <button type="submit" class="w-full px-3 py-4 text-white font-medium font-livvic bg-[#264CC5] rounded-md focus:bg-indigo-600 focus:outline-none">
                                    Send Message
                                </button>
                            </div>
                            <p class="text-base text-center text-gray-400" id="result"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        "use strict";
        /*
         * Form Validation
         */

        // Fetch all the forms we want to apply custom validation styles to
        const forms = document.querySelectorAll(".needs-validation");
        const result = document.getElementById("result");
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener(
                "submit",
                function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();

                        form.querySelectorAll(":invalid")[0].focus();
                    } else {
                        /*
                         * Form Submission using fetch()
                         */

                        const formData = new FormData(form);
                        event.preventDefault();
                        event.stopPropagation();
                        const object = {};
                        formData.forEach((value, key) => {
                            object[key] = value;
                        });
                        const json = JSON.stringify(object);
                        result.innerHTML = "Please wait...";

                        fetch("https://api.web3forms.com/submit", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    Accept: "application/json"
                                },
                                body: json
                            })
                            .then(async (response) => {
                                let json = await response.json();
                                if (response.status == 200) {
                                    result.innerHTML = json.message;
                                    result.classList.remove("text-gray-500");
                                    result.classList.add("text-green-500");
                                } else {
                                    console.log(response);
                                    result.innerHTML = json.message;
                                    result.classList.remove("text-gray-500");
                                    result.classList.add("text-red-500");
                                }
                            })
                            .catch((error) => {
                                console.log(error);
                                result.innerHTML = "Something went wrong!";
                            })
                            .then(function() {
                                form.reset();
                                form.classList.remove("was-validated");
                                setTimeout(() => {
                                    result.style.display = "none";
                                }, 5000);
                            });
                    }
                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>

<!-- subscription -->
<section class="mx-auto lg:max-w-5xl max-w-4xl">
    <div id="subscription" class="border-t-0 md:px-24 sm:px-12 px-4 py-8 my-24">
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


<hr class="border-t-2 border-gradientdivide">
<?php include('../components/footer.php'); ?>