<?php
date_default_timezone_set('UTC');
$currentDateTime = date('Y-m-d\TH:i:sP');
$post_link = "https://masterbazar.com/blog/tips";
$priority = "1";

$file = fopen("sitemap.xml", "r");
if ($file) {
    $originalContent = fread($file, filesize("sitemap.xml"));
    $newContent = "<url>
    <loc>". $post_link ."</loc>
    <lastmod>". $currentDateTime ."</lastmod>
    <priority>". $priority ."</priority>
    </url>    
    </urlset>";

    $pattern = '/<\/urlset>/';
    $updatedContent = preg_replace($pattern, $newContent, $originalContent);

    $file_update = fopen("sitemap.xml", "w");
    if ($file_update) {
        fwrite($file_update, $updatedContent);
    }

    fclose($file);
    echo $updatedContent;
}
?>