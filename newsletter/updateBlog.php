<?php
include('../database.php');
date_default_timezone_set('UTC');
$currentDateTime = date('Y-m-d\TH:i:sP');
$priority = "1";

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
$baseUrl = "https://masterbazar.com/blog/";

if ($result->num_rows > 0) {
    
    $file = fopen("sitemap.xml", "r");
    if ($file) {
        $originalContent = fread($file, filesize("sitemap.xml"));
        fclose($file);

        $newContent = "";

        while ($row = $result->fetch_assoc()) {
            $posts_slug = $row['slug'];
            $post_link = $baseUrl . $posts_slug;

            $newContent .= "<url>
                <loc>" . $post_link . "</loc>
                <lastmod>" . $currentDateTime . "</lastmod>
                <priority>" . $priority . "</priority>
                </url>
                ";
        }

        $newContent .= "</urlset>";

        $pattern = '/<\/urlset>/';
        $updatedContent = preg_replace($pattern, $newContent, $originalContent);

        $file_update = fopen("sitemap.xml", "w");
        if ($file_update) {
            fwrite($file_update, $updatedContent);
            fclose($file_update);
        }

        echo "Sitemap updated successfully!";
    } else {
        echo "Unable to open sitemap.xml for reading.";
    }
}
?>
