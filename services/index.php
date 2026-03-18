<?php
require_once "../config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'SENDA JAPAN provides a wide range of services that can help you with all your IT needs. We offer custom solutions to your specific needs.';
$meta_keywords = 'SENDA JAPAN services, IT services, custom IT solutions';
$meta_title = 'Services | SENDA JAPAN';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

$page_name = "Services - website & mobile app development - ".$page_name;

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