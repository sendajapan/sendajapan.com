<?php 
	$url = trim($_SERVER['REQUEST_URI'], '/');
	$uri_seg = explode('/', $url);
	$act_page = end($uri_seg); 
	if( $act_page == '' || $act_page == 'sendajapan'){
		$page = "home";
	}else{
		$page = $act_page;
	}

	// $current   = strtotime(date('Y-m-d'));
	$current   = time();
	$your_date = strtotime("2019-05-01");
	$datediff  = $current - $your_date;
	$total_days = round($datediff / (60 * 60 * 24));
	if ($page == 'home') {
		$days = $total_days;
	}else if($page == 'works'){
		$days = $total_days;
		
	}else if($page == 'ios-app-development'){
		$days = (0.15*$total_days)*1.8;

	}else if($page == 'android-app-development'){
		$days = (0.13*$total_days)*1.8;
		
	}else if($page == 'web-development'){
		$days = (0.12*$total_days)*1.8;
		
	}else if($page == 'mobile-ui-ux-design'){
		$days = (0.25*$total_days)*1.8;
		
	}else if($page == 'brochure-designing'){
		$days = (0.09*$total_days)*1.8;
		
	}else if($page == 'logo-designing'){
		$days = (0.06*$total_days)*1.8;
		
	}else if($page == 'content-marketing'){
		$days = (0.06*$total_days)*1.8;
		
	}else if($page == 'digital-marketing'){
		$days = (0.04*$total_days)*1.8;
		
	}else if($page == 'search-engine-optimization'){
		$days = (0.10*$total_days)*1.8;
		
	}

 ?>