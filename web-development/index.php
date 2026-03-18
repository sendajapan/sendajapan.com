<?php
require_once "../config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'We specialize in web development. We work with the latest technologies and keep up to date with the latest trends';
$meta_keywords = 'web development company, website development, ecommerce development, web development services, responsive web design';
$meta_title = 'Web Development | SENDA JAPAN';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

$page_name = "Web Development - web development mobile app - ".$page_name;

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