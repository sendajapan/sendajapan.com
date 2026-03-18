<?php
require_once "config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'SENDA JAPAN is a team of highly experienced and creative experts who provide software services that are essential to the success of your business.';
$meta_keywords = 'software services, software development, web development, app development, mobile app development';
$meta_title = 'SENDA JAPAN | Team of Highly Experinced and Creative Experts';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

$page_name .= " - TEAM OF HIGLY EXPERIENCED & CREATIVE IT EXPERTS";

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