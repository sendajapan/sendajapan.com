<?php header('Content-Type: text/xml'); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<?php
$all_urls[] = array('url' => 'https://www.sendajapan.com/' , 'worth' => '1.00');
$all_urls[] = array('url' => 'https://www.sendajapan.com/about/' , 'worth' => '0.90');
$all_urls[] = array('url' => 'https://www.sendajapan.com/services/' , 'worth' => '0.90');
$all_urls[] = array('url' => 'https://www.sendajapan.com/works/' , 'worth' => '0.90');
$all_urls[] = array('url' => 'https://www.sendajapan.com/products/' , 'worth' => '0.90');
$all_urls[] = array('url' => 'https://www.sendajapan.com/contact/' , 'worth' => '0.90');
$all_urls[] = array('url' => 'https://www.sendajapan.com/team/' , 'worth' => '0.90');
$all_urls[] = array('url' => 'https://www.sendajapan.com/privacy/' , 'worth' => '0.90');

$all_urls[] = array('url' => 'https://www.sendajapan.com/web-development/' , 'worth' => '0.85');
$all_urls[] = array('url' => 'https://www.sendajapan.com/software-solutions/' , 'worth' => '0.85');
$all_urls[] = array('url' => 'https://www.sendajapan.com/internet-marketing/' , 'worth' => '0.85');


?>

<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <?php
     foreach($all_urls as $url_data) {
       echo "<url>\n";
       echo "  <loc>".$url_data['url']."</loc>\n";
       echo "  <lastmod> ".date("Y-m-d")."T00:00:00+00:00</lastmod>\n";
       echo "  <priority>".$url_data['worth']."</priority>\n";
       echo "</url>\n";
     }
    ?>
</urlset>
