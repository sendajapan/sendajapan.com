<?php
require_once "../config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'This Privacy Policy describes how SENDA JAPAN collects, uses, and shares information about you when you use our website or services.';
$meta_keywords = 'privacy policy, senda japan, how we collect information, use of information, sharing of information';
$meta_title = 'Privacy Policy | SENDA JAPAN';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

$page_name = "Privacy Policy - application of development - ".$page_name;

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