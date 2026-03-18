<?php
require_once "../config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'SENDA JAPAN is the leading IOS app development company. We have a team of experienced IOS app developers who have expertise in developing IOS apps.';
$meta_keywords = 'ios app development company, experienced ios app developers, ios app development';
$meta_title = 'IOS App Development | SENDA JAPAN';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

$page_name = "IOS App Development - i app technologies - ".$page_name;

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