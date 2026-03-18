<?php
require_once "../config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'We are an IT company in Tokyo. We are a team of Professionals having experience in UI designs, Web Development, Mobile Development, and Ecommerce projects.';
$meta_keywords = 'IT company in Tokyo, team of professionals, experience in UI design, web development, mobile development, ecommerce projects.';
$meta_title = 'About Us | Our Mission, Vision and Strategy | SENDA JAPAN';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

$page_name = "About Us - about web application development - ".$page_name;

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