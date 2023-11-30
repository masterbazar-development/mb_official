<?php
//Template Name: Contact us
get_header();
?>

<main>

    <div class="w-[100vw] md:w-[80vw] lg:w-[85vw]">
        <div class=" bg-[#f4f2f2] h-[25vh] md:h-[25vh] lg:h-[35vh] "></div>


        <div class=" flex h-screen overflow-hidden">
            <!-- Image Container -->
            <div class="md:w-[85vw] overflow-hidden">
                <img class="w-full h-[65vh] md:h-[65vh] lg:h-full object-cover" src="<?php echo get_template_directory_uri() ?>/images/conban.webp" alt="Your Image">
                <h1 class="h1-pt slideDown absolute text-transparent font-bold text-6xl md:text-8xl lg:text-9xl left-5 md:left-[50px] lg:left-[350px] bottom-[610px] md:bottom-[950px] lg:top-[150px] tracking-wide">
                    Contact</h1>
                <h2 class="slideUp absolute z-10 text-[#e9d1ca] font-bold text-6xl md:text-8xl lg:text-9xl left-5 md:left-[50px] lg:left-[350px] bottom-[500px] md:bottom-[800px] lg:top-[330px] tracking-wide">
                    Stayfit:</h2>

                <div class="emblem absolute z-10 left-[300px] md:left-[500px] lg:left-[1050px] bottom-[550px] md:bottom-[900px] lg:top-[100px] lg:w-30 lg:h-30 font-bold text-black tracking-widest">
                    * We * Make * You * Fit * Yes * You * Can
                </div>

                <div class="absolute bg-white z-10 px-4 md:px-10 left-5 md:left-[50px] lg:left-[350px] bottom-[-100px] md:bottom-[-100px] lg:bottom-[-450px] w-[300px] md:w-[550px] lg:w-[400px] md:h-[400px] lg:h-[250px] font-bold space-y-3 font-Josefin">

                    <p class="slideDown text-xs md:text-lg">
                        Are you interested in fitlab and would you like to experience what it means to work on your
                        personal goals? Please request more information without obligation and we will contact you.
                    </p>
                    <p class="slideDown ">
                        <i class="fa-brands fa-instagram fa-2xl" style="color: #e25a5a;"></i>
                        <i class="fa-brands fa-square-facebook fa-2xl ml-5" style="color: #e25a5a;"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#e9d1ca] overflow-hidden sidebar1 md:right-[-290px] lg:right-[-350px] md:top-[550px] lg:top-[450px] absolute right-0 transform rotate-90 p-4 bg-transparent">
        <p class="md:text-8xl lg:text-9xl text-transparent font-bold">#WeMakeYouFit</p>
    </div>

    <div class="bg-[#e9d1ca] h-[20vh]"></div>

    <div class="container11">
        <div class="innerwrap">

            <div class="section2 clearfix">
                <div class="col2 column1 first">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
                        <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                        <div><small><a href="http://embedgooglemaps.com"> embed google maps </a></small></div>
                        <div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small>
                        </div>
                        <style>
                            #gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }
                        </style>
                    </div>
                    <script type='text/javascript'>
                        function init_map() {
                            var myOptions = {
                                zoom: 14,
                                center: new google.maps.LatLng(36.778259, -119.417931),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(36.778259, -119.417931)
                            });
                            infowindow = new google.maps.InfoWindow({
                                content: '<strong>My Location</strong><br>california<br>'
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                </div>
                <div class="col2 column2 last">
                    <div class="sec2innercont">
                        <div class="sec2addr">
                            <p>45 street 4001 California Ave, Bakersfield, CA 93309, United States</p>
                            <p><span class="collig">Phone :</span> +01 66887766</p>
                            <p><span class="collig">Email :</span> stayfit@gmail.com</p>
                            <p><span class="collig">tele :</span> +01 00000000</p>
                        </div>
                    </div>
                    <div class="sec2contactform">
                        <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
                        <form action="">
                            <div class="clearfix">
                                <input class="col2 first" type="text" placeholder="FirstName">
                                <input class="col2 last" type="text" placeholder="LastName">
                            </div>
                            <div class="clearfix">
                                <input class="col2 first" type="Email" placeholder="Email">
                                <input class="col2 last" type="text" placeholder="Contact Number">
                            </div>
                            <div class="clearfix">
                                <textarea name="textarea" id="" cols="30" rows="7">Your message here...</textarea>
                            </div>
                            <div class="clearfix"><input type="submit" value="Send"></div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
?>