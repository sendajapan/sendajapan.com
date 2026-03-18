<?php
session_start();	


define("APP_PATH", "/home/sendajapan/public_html/");
define("APP_URL", "https://sendajapan.com/");
$page_name = "SENDA JAPAN";


if (isset($_SESSION['sendajapan']['lang'])) {
$language = $_SESSION['sendajapan']['lang'];
}else{
	$language=="en";
}
if($language==""){
	$language="en";
}

include(APP_PATH.'assets/lang/'.$language.'.php');

?>