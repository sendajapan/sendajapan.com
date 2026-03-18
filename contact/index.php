<?php
require_once "../config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'Senda Japan is a leading provider of innovative technology solutions. We provide high quality software services to exceed customers expectations.';
$meta_keywords = 'software services, customer expectations, innovative technology, high quality software services';
$meta_title = 'Contact Us | Senda Japan';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

$page_name = "Contact Us - mobility application development - ".$page_name;

$detect = new Mobile_Detect;
 
if ( $detect->isMobile() ) {
	$folder = 'mobile';
}
elseif( $detect->isTablet() ){
	$folder = 'mobile';
}
else{
	$folder = 'pc';
}

include($folder.'.php');

?>