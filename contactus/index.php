<?php include('../components/header.php'); ?>
<?php include('../components/loader.php'); ?>

<?php include('../components/navmenu.php'); ?>

<div class="container mx-auto max-w-7xl px-0">
    <?php include('../components/heroheader.php'); ?>
</div>

<!-- main content -->
<section class="fading flex bg-[url('<?php echo $mainUrl; ?>assets/client/images/contact-us.jpg')] bg-center bg-cover h-[65vh] bg-[#294497] font-bold text-white">
    <div class="fade"></div>
</section>

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
<section class="2xl:max-w-5xl mx-auto my-32">
    <div class="container flex flex-col items-center  mx-auto text-center ">
        <h2 class=" mx-auto lg:text-3xl font-bold tracking-tight text-head 2xl:text-5xl dark:text-white">
            Get in Touch Today and Let's Create <span class="text-blue">Something Extraordinary.</span>
        </h2>

        <p class="max-w-4xl 2xl:text-lg lg:text-base mt-8 text-center text-gray-700 dark:text-gray-300 font-livvic">
            Lorem, ipsum dolor sit amet consectetur
            adipisicing elit. Cum quidem officiis reprehenderit, aperiam veritatis non, quod veniam fuga possimus hic
            explicabo laboriosam nam. A tempore totam ipsa nemo adipisci iusto!
        </p>
        <p class="max-w-4xl 2xl:text-lg lg:text-base font-livvic text-gray-700 mt-4 text-center  dark:text-gray-300 pb-10">
            Please fill out the form below and we will get back to you as soon as possible. We value your time and strive to provide quick responses to all inquiries.
        </p>
    </div>
</section>


<?php include("../components/ContactUs.php");?>

<?php include('../components/footer.php'); ?>