<style>
    .invalid-feedback,
    .empty-feedback {
        display: none;
    }

    .was-validated :placeholder-shown:invalid~.empty-feedback {
        display: block;
    }

    .was-validated :not(:placeholder-shown):invalid~.invalid-feedback {
        display: block;
    }

    .is-invalid,
    .was-validated :invalid {
        border-color: #dc3545;
    }

    .responsive-map {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .responsive-map iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        background-image: none;
        flex: 1;
        padding: 0 .5em;
        color: #fff;
        cursor: pointer;
        font-size: 1em;
        font-family: 'Open Sans', sans-serif;
    }

    select::-ms-expand {
        display: none;
    }

    .select {
        position: relative;
        display: flex;
        overflow: hidden;
    }

    .select::after {
        content: '\25BC';
        position: absolute;
        top: 3;
        right: 0;
        padding: 0 1em;
        cursor: pointer;
        pointer-events: none;
        transition: .25s all ease;
    }

    .select:hover::after {
        color: rgb(14, 101, 233);
    }
</style>

<section class="flex justify-center md:flex-row flex-col md:gap-6 gap-12 max-w-7xl mx-auto">
    <div class="md:w-1/2 md:mx-0 sm:mx-8 mx-4">
    <div class="rounded-lg ">
            <img src="<?php echo $mainUrl; ?>assets/client/images/contact1.png" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy">
        </div>
        <div class="flex mt-4 gap-8">
            <div class="w-1/2">
                <h2 class="text-3xl font-extrabold mt-5 text-head ">INDIA</h2>
                <p class="text-lg max-w-2/3 mt-2 font-livvic">P-67, Top Floor, Block E Pandav Nagar Rd, Block P, Mayur Vihar,
                    New
                    Delhi, Delhi, 110091</p>
            </div>
            <div class="w-1/2">
                <h2 class="text-3xl font-extrabold mt-5 text-head">America</h2>
                <p class="text-lg max-w-2/3 mt-2 font-livvic">+1-443-478-3833</p>
            </div>
        </div>
    </div>

    <div class="md:w-1/2">
        <div class="flex items-center ">
            <div class="container mx-auto">
                <div class="max-w-xl mx-auto bg-white shadow-sm">
                <div class="text-center">
                        <h1 class="mb-3 text-5xl font-extrabold text-head ">
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
                                <button type="submit" class="w-full px-3 py-4 shadow text-head font-bold font-livvic bg-gradient-to-br from-[#2563EB33] to-[#7DA5FB33]  rounded-md focus:bg-indigo-600 focus:outline-none">
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