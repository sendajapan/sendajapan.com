<?php
session_start();
$language = $_GET['l'];

if($language=="em"){
$_SESSION['sendajapan']['lang'] = 'em';
}
else if($language=="en"){
$_SESSION['sendajapan']['lang'] = 'en';
}
else if($language=="jp"){
$_SESSION['sendajapan']['lang'] = 'jp';
}
else{
$_SESSION['sendajapan']['lang'] = 'en';
}

?>

<script>history.back();</script>