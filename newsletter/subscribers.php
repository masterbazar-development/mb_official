<?php
include('../mb-admin/config/dbcon.php');
// Handle Form Submission
if (isset($_POST["submit-btn"])) {
      $email = $_POST["subscriber-email"];
      $from = 'rajat.masterbazar@gmail.com';
    // Email Validtions
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Insert the email into the database
        $sql = "INSERT INTO subscribers (email,subscription_date,status) VALUES ('$email', NOW(),'1')";
        // status = zero value considered as false & all non zero values are considered as True
        if ($con->query($sql) === TRUE) {
            //insertion true=> now auto-response mail
            $subject = 'Thank you for subscribing to Master Bazar Newsletter!';
            $message = 'Dear ' . $email . ', 
             Here’s what you’ll be receiving:
         
             In-depth guides: Learn everything you need to know about digital marketing, from beginner-level introductions to advanced strategies in SEO, PPC, social media advertising, email marketing, UI/UX, and development. Our guides are comprehensive, easy to follow, and full of examples and tips.
             
             
             Interactive learning: Have fun and learn at the same time with our interactive resources. We make digital marketing enjoyable and accessible with quizzes, games, videos, and more. We believe that learning should be engaging and practical.
             
             Actionable insights: Get inspired by our analysis of successful businesses and apply their strategies and techniques to your own ventures. Stay ahead of the game by learning from the best in the industry and implementing their proven methods.
             
             Stay updated: Don’t miss out on the latest news, tutorials, and analysis. Our newsletter will be delivered straight to your inbox, keeping you informed and inspired.
             
             
             
             Once again we’re excited to have you on this digital journey with us! If you have any questions, need guidance, or have specific topics you’d like us to cover, feel free to contact us. We value your feedback and are here to support your learning and growth.
             
             Remember, digital success starts with learning, and we’re here to help you take that first step. Stay tuned for regular updates and actionable content.
             
             Thank you once again for subscribing to the Master Bazar newsletter. Get ready to unlock your digital potential!
             
             
             All the Best!
             Master Bazar
             
             If you have any questions, feel free to message us at info@masterbazar.com.
             All right reserved. Update email preferences or unsubscribe.
             ';
             // Additional headers
             $headers = 'From: ' . $from . "\r\n" .
                 'Reply-To: ' . $from . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
         
             // Send the auto-response email
             $mailSent = mail($email, $subject, $message, $headers);
             // Check if the email was sent successfully
             if ($mailSent) {
                header('Location: ../blog');
                exit;
             } else {
                 echo 'Failed to send the Response email.';
             }
            echo "Subscription successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "Invalid email address";
    }
}


$con->close();
//  Sender and recipient email addresses

    // Email subject and message
   

?>