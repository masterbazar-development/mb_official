<?php include('../components/header.php'); ?>
<?php include('../components/loader.php'); ?>
<?php include('../components/navmenu.php'); ?>


<div class="container mx-auto max-w-7xl px-0">
    <?php include('../components/heroheader.php'); ?>
</div>

<!-- main content -->
<section class="fading flex bg-[url('<?php echo $mainUrl; ?>assets/client/images/career-mb.jpg')] bg-center bg-cover h-[70vh] items-center justify-center bg-[#294497] font-bold text-white">
    <div class="fade"></div>
</section>
<div class="text-white font-rubik px-5 sm:px-8 lg:px-20 xl:px-40 pt-16 md:pt-32 backu">
    <h3 class="text-left md:text-center font-extrabold text-5xl  text-head  capitalize ">
        Job Application <span class="text-blue">Form</span>
    </h3>

    <p class="text-lg md:text-center font-normal text-gray-700 text-start mt-3">
        Please fill the form below and apply for your new job at Master Bazar
    </p>

    <div class="py-10 mt-8 lg:mt-2 md:mx-20">
        <form method="post" enctype="multipart/form-data">
            <div class="flex justify-start items-start flex-col sm:flex-row gap-3 sm:gap-8 md:gap-12 my-4 md:my-6">
                <div class="w-full">
                    <label class="text-md md:text-md font-semibold text-black capitalize">First Name<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="text" class="text-md mt-1 border-b border-slate-300 bg-slate-100 font-semibold  w-full px-4 py-3  text-[#a0a0a0] bg-[rgba(255,255,255,0.13)] backdrop-blur-md focus-visible:border-none focus-visible:border-0 focus:border-none outline-none" onkeypress="return /[a-zA-Z ]/i.test(event.key)" id="fname" name="firstname" placeholder="write here" required>
                </div>
                <div class="w-full">
                    <label class="text-md md:text-md font-semibold text-black capitalize">Last Name<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="text" class="after:content-['\*'] border-b border-slate-300 bg-slate-100 font-semibold w-full px-4 py-3 after:text-red-600 text-md mt-1 text-[#a0a0a0] bg-[rgba(255,255,255,0.13)] backdrop-blur-md focus-visible:border-none focus:border-none outline-none" onkeypress="return /[a-zA-Z ]/i.test(event.key)" name="lastname" placeholder="write here" id="lname">
                </div>
            </div>

            <div class="flex justify-start items-start flex-col sm:flex-row gap-3 sm:gap-8  md:gap-12 my-4 md:my-6">
                <div class="w-full">
                    <label class="text-md md:text-md font-semibold text-black capitalize">Email<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="email" class="text-md  font-semibold mt-1  border-b border-slate-300 bg-slate-100 w-full px-4 py-3  text-[#a0a0a0] bg-[rgba(255,255,255,0.13)] blur-10 focus-visible:border-none focus:border-none outline-none" id="email" name="email" placeholder="write here" required>
                </div>
                <div class="w-full">
                    <label class="text-mdmd:text-md font-semibold text-black capitalize">Phone Number<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="tel" class="text-md mt-1  font-semibold border-b border-slate-300 bg-slate-100 w-full px-4 py-3  text-[#a0a0a0] bg-[rgba(255,255,255,0.13)] blur-10 focus-visible:border-none focus:border-none outline-none" id="phoneno" name="phonenumber" placeholder="write here" onkeypress="if(isNaN( String.fromCharCode(event.keyCode))) return false;" maxlength="10" required>
                </div>
            </div>

            <div class="my-4">
                <label class="text-md font-semibold text-black capitalize">Address<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                <textarea name="address" class="text-mdmd:text-md mt-1 border-b border-slate-300 bg-slate-100 font-semibold text-[#a0a0a0] bg-[rgba(255,255,255,0.13)]  w-full h-20 px-4 py-3 outline-none" placeholder="write here" id="address" required></textarea>
            </div>

            <div class="flex justify-start items-start flex-col sm:flex-row gap-3 sm:gap-8  md:gap-12 my-4 md:my-6">
                <div class="w-full">
                    <label class="text-md md:text-md font-semibold text-black capitalize">Position Applying For<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <select type="email" class="text-md mt-1 border-b border-slate-300 bg-slate-100 text-[#a0a0a0] bg-[rgba(255,255,255,0.13)]  w-full px-4 py-3 outline-none" id="position" name="position" required>
                        <option value="" selected>Please Select</option>
                        <option value="php">PHP Developers</option>
                        <option value="LD">Laravel Developers</option>
                        <option class="DM">Digital Marketing Executive</option>
                    </select>
                </div>
                <div class="w-full">
                    <label class="text-mdmd:text-md font-semibold text-black capitalize">Available From<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="date" class="text-md mt-1  border-b border-slate-300 bg-slate-100 font-semibold text-[#a0a0a0] bg-[rgba(255,255,255,0.13)]  w-full px-4 py-3 outline-none" id="availabledate" name="availabledate" required>
                </div>
            </div>

            <div class="flex justify-start items-start flex-col sm:flex-row gap-3 sm:gap-8  md:gap-12 my-4 md:my-6">
                <div class="w-full">
                    <label class="text-mdmd:text-md font-semibold text-black capitalize">Current CTC<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="text" class="text-md mt-1  font-semibold  border-b border-slate-300 bg-slate-100  w-full px-4 py-3  text-[#a0a0a0] bg-[rgba(255,255,255,0.13)] blur-10 focus-visible:border-none focus:border-none outline-none" id="currentctc" name="currentctc" placeholder="write here" required>
                </div>
                <div class="w-full">
                    <label class="text-mdmd:text-md font-semibold text-black capitalize">Expected CTC<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="text" class="text-md mt-1 font-semibold border-b border-slate-300 bg-slate-100 text-[#a0a0a0] bg-[rgba(255,255,255,0.13)]  w-full px-4 py-3 outline-none" id="expectedctc" name="expectedctc" placeholder="write here" required>
                </div>
            </div>

            <div class="flex justify-start items-start flex-col sm:flex-row gap-3 sm:gap-8 md:gap-12 my-4 md:my-6">
                <div class="w-full">
                    <label class="text-mdmd:text-md font-semibold text-black capitalize">Upload Portfolio/CV<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="file" class="text-md mt-1 font-semibold border-b border-slate-300 bg-slate-100 text-[#a0a0a0] bg-[rgba(255,255,255,0.13)]  w-full px-4 py-3 outline-none" id="uploadportfolio" name="uploadportfolio" required>
                </div>
                <div class="w-full">
                    <label class="text-mdmd:text-md font-semibold text-black capitalize">Link Of Projects<span class="bg-clip-text text-transparent text-gradient bg-gradient-to-r from-yellow-400 to-pink-500 text-lg">*</span></label><br />
                    <input type="text" class="text-md mt-1 font-semibold border-b border-slate-300 bg-slate-100 text-[#a0a0a0] bg-[rgba(255,255,255,0.13)] w-full px-4 py-3 outline-none" id="projectlinks" name="projectlinks" placeholder="write here" required>
                </div>
            </div>

            <div class="flex justify-start sm:justify-center items-center cursor-pointer">

                <button name="submit-btn" value="submit" class="button2 mt-6 font-semibold bg-blue text-white rounded-full py-3 px-28 shadow-md hover:shadow-2xl transition duration-500">
                    Submit
                </button>

            </div>
        </form>
    </div>
    <style>
        .fading {
            position: relative;
        }

        .fading .fade {
            position: absolute;
            top: 0;
            width: 100%;
            height: 350px;
            background: rgba(255, 255, 255, 0) linear-gradient(to top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.877) 80%) repeat scroll 0 0;
        }
    </style>

    <?php
    if (isset($_POST["submit-btn"])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $position = $_POST['position'];
        $availabledate = $_POST['availabledate'];
        $currentctc = $_POST['currentctc'];
        $expectedctc = $_POST['expectedctc'];
        //$uploadportfolio = $_POST['uploadportfolio'];
        $imagename = $_FILES['uploadportfolio']['name'];
        $imageData = $_FILES['uploadportfolio']['tmp_name'];

        move_uploaded_file($imageData, "upload/resume/$imagename");
        // sql query for inserting data into database
        $projectlinks = $_POST['projectlinks'];
        /*$sql = "INSERT INTO carrearform (name, email, mob_no, address, availabledate, currentctc, portfolio,expectedctc, projectlinks)
            VALUES ('$firstname', '$email', '$phonenumber', '$position', '$availabledate', '$currentctc','$imagename', '$expectedctc', '$projectlinks');";
              if (mysqli_query($link, $sql)) {
            */
        $to = 'rajat.masterbazar@gmail.com';
        // Sender 
        //  $from = 'tanima.masterbazar@gmail.com';
        $from = 'rajat.masterbazar@gmail.com';
        $fromName = 'Master Bazar';
        // Email subject 
        $subject = 'Career Page Form Submission';

        // Attachment file 
        $file = "upload/resume/$imagename";

        // Email body content 
        $htmlContent = '<p>This email is sent from the Master Bazar with attachment.</p>
            <table cellspacing="0" style="width: 100%;padding:10px"> 
            <tr> 
                <th style="text-align:left;" >Full Name:</th><td>' . $firstname . $lastname . '</td> 
            </tr> 
            <tr style="background-color:#e0e0e0;text-align:left;"> 
                <th>Email:</th><td>' . $email  . '</td> 
            </tr> 
            <tr style="text-align:left;"> 
                <th>Mobile No.:</th><td>' . $phonenumber . '</td> 
            </tr> 
            <tr style="background-color:#e0e0e0;text-align:left;"> 
                <th>Address:</th><td>' . $address . '</td> 
            </tr>
            <tr style="text-align:left;"> 
                <th>Position:</th><td>' . $position . '</td> 
            </tr> 
            <tr style="background-color:#e0e0e0;text-align:left;" > 
                <th>Available From:</th><td>' .  $availabledate . '</td> 
            </tr>
            <tr style="text-align:left;"> 
                <th> Expectedctc :</th><td>' .  $expectedctc . '</td> 
            </tr>
            <tr style="background-color: #e0e0e0;text-align:left;" > 
                <th>Currentctc:</th><td>' . $currentctc . '</td> 
            </tr>
        </table> 
            ';

        // Header for sender info 
        $headers = "From: $fromName" . " <" . $from . ">";

        // Boundary  
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

        // Headers for attachment  
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

        // Multipart boundary  
        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

        // Preparing attachment 
        if (!empty($file) > 0) {
            if (is_file($file)) {
                $message .= "--{$mime_boundary}\n";
                $fp =    fopen($file, "rb");
                $data =  fread($fp, filesize($file));

                fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n" .
                    "Content-Description: " . basename($file) . "\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"" . basename($file) . "\"; size=" . filesize($file) . ";\n" .
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
            }
        }
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from; // Send email 

        $mailmasterbazar = mail($to, $subject, $message, $headers, $returnpath);
        if ($mailmasterbazar) {
            echo "<script>alert('Thank You! We have received  your application. You will receive an update soon.');</script>";
        } else {
            echo "<script>alert('Server Error');</script>";
        }
    }
    ?>


    <?php include('../components/footer.php'); ?>