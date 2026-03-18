<?php
$email = $_GET['email'];
$myfile = fopen("subscribe_list.txt", "a") or die("Unable to open file!");
$txt = $email."\n";
if (fwrite($myfile, $txt)) {
		fclose($myfile);
		echo 1;
	}else{
		echo 0;
	}




?>
