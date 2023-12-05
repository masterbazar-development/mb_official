<!-- important the image size ratio is 1:1 ie. every image is a square image -->

<div id="client-logo" class="image-container bg-black flex justify-center items-center sm:flex-nowrap flex-wrap md:gap-12 sm:gap-8 gap-4 sm:py-12 py-8">
    <div class="image-box bg-black relative xl:xl:w-[150px] xl:xl:h-[150px] w-[100px] h-[100px]overflow-hidden">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl1.png" alt="Image 1" class="image image1">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl6.png" alt="Image 2" class="image image2">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl3.png" alt="Image 3" class="image image3">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl8.png" alt="Image 4" class="image image4">
    </div>

    <div class="image-box bg-black relative xl:xl:w-[150px] xl:xl:h-[150px] w-[100px] h-[100px]overflow-hidden">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl2.png" alt="Image 1" class="image image1">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl7.png" alt="Image 2" class="image image2">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl4.png" alt="Image 3" class="image image3">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl1.png" alt="Image 4" class="image image4">
    </div>

    <div class="image-box bg-black relative xl:xl:w-[150px] xl:xl:h-[150px] w-[100px] h-[100px]overflow-hidden">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl3.png" alt="Image 1" class="image image1">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl8.png" alt="Image 2" class="image image2">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl5.png" alt="Image 3" class="image image3">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl2.png" alt="Image 4" class="image image4">
    </div>

    <div class="image-box bg-black relative xl:w-[150px] xl:h-[150px] w-[100px] h-[100px]overflow-hidden">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl4.png" alt="Image 1" class="image image1">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl1.png" alt="Image 2" class="image image2">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl6.png" alt="Image 3" class="image image3">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl3.png" alt="Image 4" class="image image4">
    </div>

    <div class="image-box bg-black relative xl:w-[150px] xl:h-[150px] w-[100px] h-[100px]overflow-hidden">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl5.png" alt="Image 1" class="image image1">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl2.png" alt="Image 2" class="image image2">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl7.png" alt="Image 3" class="image image3">
        <img src="<?php echo $mainUrl ?>assets/client/images/testimonial/client-logo/cl4.png" alt="Image 4" class="image image4">
    </div>
</div>

<script defer>
    const imageContainers = document.querySelectorAll('.image-box');

    function slideIn() {
        imageContainers.forEach((container) => {
            const images = container.querySelectorAll('.image');

            images.forEach((image, index) => {
                setTimeout(() => {
                    image.style.transform = 'translate(0, 0)';
                }, index * 2000); // Adjust the delay based on your preference 
            });
        });

        setTimeout(resetTransform, imageContainers.length * 2000);
    }

    function resetTransform() {
        imageContainers.forEach((container) => {
            const images = container.querySelectorAll('.image');

            images.forEach((image) => {
                image.style.transform = '';
            });
        });

        setTimeout(slideIn, 0);
    }

    // Trigger the animation
    window.onload = slideIn;
</script>