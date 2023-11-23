<?php 
include('../mb-admin/config/dbcon.php');

$blogTitle = "Sample Blog Post";
$blogContent = "This is the content of the blog post.";

// Retrieve email addresses from the subscribers table
$sql = "SELECT email FROM subscribers";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $subscriberEmail = $row["email"];
        // Read the email template
        $emailTemplate = file_get_contents('email_template.html');

        // Replace placeholders with actual content
        $emailTemplate = str_replace('{{BLOG_TITLE}}', $blogTitle, $emailTemplate);
        $emailTemplate = str_replace('{{BLOG_CONTENT}}', $blogContent, $emailTemplate);

        // Set up email headers
        $to = $subscriberEmail;
        $subject = 'New Blog Post Notification';
        $headers = "From: your_email@example.com\r\n";
        $headers = "Content-type: text/html\r\n";

        // Send the email
        mail($to, $subject, $emailTemplate, $headers);
    }

    echo "Emails sent successfully!";
} else {
    echo "No subscribers found.";
}

// Send the email
mail($to, $subject, $emailTemplate, $headers);

echo "Email sent successfully!";
?>