<?php
require_once "../config.php";
require_once  APP_PATH."/assets/vendors/mobile_detect/Mobile_Detect.php";

$meta_description = 'A portfolio of SENDA JAPAN showing the latest and greatest work we have done for clients all around the world.';
$meta_keywords = 'portfolio of work, latest work, greatest work, work for clients';
$meta_title = 'Portfolio | SENDA JAPAN';

$meta = array(
	array('name' => 'description', 'content' => $meta_description),
	array('name' => 'og:description', 'content' => $meta_description),
	array('name' => 'keywords', 'content' => $meta_keywords),
	array('name' => 'title', 'content' => $meta_title),
	array('name' => 'og:title', 'content' => $meta_title)
);

	$page_name = "Portfolio - it in mobile app and web development - ".$page_name;

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


if(isset($_GET['product']) && $_GET['product']!=""){

	$project_request = $_GET['product'];
	
	$projects['automated-vehicle-information-system'] = array("title"=>$avis_title, "content" =>$avis_content, "main_img"=>"AVIS_MAIN.webp", "img1"=>"AVIS01.webp", "img2"=>"AVIS02.webp", "img3"=>"AVIS03.webp", "img4"=>"AVIS04.webp");
	
	$projects['financial-properties-management-system'] = array("title"=>$fpms_title, "content"=>"$fpms_content", "main_img"=>"FAM_MAIN.webp", "img1"=>"FAM01.webp", "img2"=>"FAM02.webp", "img3"=>"FAM03.webp", "img4"=>"FAM04.webp");
	
	$projects['avis-branch-management-system'] = array("title"=>$avis_branch_ms_title, "content" =>"$avis_branch_ms_content", "main_img"=>"BRANCH_MAIN.webp", "img1"=>"BRANCH01.webp", "img2"=>"BRANCH02.webp", "img3"=>"BRANCH03.webp", "img4"=>"BRANCH04.webp");

	$projects['it-degital-asset-management-system'] = array("title"=>$it_asset_ms_title, "content" =>"$it_asset_ms_content", "main_img"=>"AMS_MAIN.webp", "img1"=>"AMS_01.webp", "img2"=>"AMS_02.webp", "img3"=>"AMS_03.webp", "img4"=>"AMS_04.webp");

	$projects['miauto-pdf-certificate-generation-system'] = array("title"=>$miauto_title, "content" =>"$miauto_content", "main_img"=>"MiAuto_MAIN.webp", "img1"=>"MiAuto_01.webp", "img2"=>"MiAuto_02.webp", "img3"=>"MiAuto_03.webp", "img4"=>"MiAuto_04.webp");

	$projects['auction-pro-japan'] = array("title"=>$auction_pro_title, "content" =>"$auction_pro_content", "main_img"=>"AuctionPro_MAIN.webp", "img1"=>"Auctionpro_01.webp", "img2"=>"Auctionpro_02.webp", "img3"=>"Auctionpro_03.webp", "img4"=>"Auctionpro_04.webp");


	$flag=0;
	foreach($projects as $key=>$v){
		if($project_request == $key){
			$flag=1;
			$data = $v;
		}
	}
	if($flag==0){
		include("not-found/".$folder.'.php');
	}
	else{
		include("products-detail/".$folder.'.php');
	}

	}elseif(isset($_GET['project']) && $_GET['project']!=""){
		$project_request = $_GET['project'];
		
		$projects['Autocraftjapan'] = array("title" => $autocraft_title, "content" =>$autocraft_content, "main_img"=>"MAIN-AUTOCRAFT.webp", "img1"=>"autocraft1.webp", "img2"=>"autocraft2.webp", "img3"=>"autocraft3.webp", "img4"=>"autocraft4.webp");
		
		$projects['Karmen'] = array("title" => $karmen_title, "content"=>$karmen_content, "main_img"=>"MAIN-KARMEN.webp", "img1"=>"karmen1.webp", "img2"=>"karmen2.webp", "img3"=>"karmen3.webp", "img4"=>"karmen4.webp");
		
		$projects['GreenwayMotors'] = array("title" => $greenway_title, "content" =>$greenway_content, "main_img"=>"MAIN-GREENWAYMOTORS.webp", "img1"=>"greenwaymotors1.webp", "img2"=>"greenwaymotors2.webp", "img3"=>"greenwaymotors3.webp", "img4"=>"greenwaymotors4.webp");

		$projects['Motivistjapan'] = array("title" => $motivistjapan_title, "content" =>$motivistjapan_content, "main_img"=>"MIAN-MOTIVIST-JAPAN.webp", "img1"=>"motivist-japan1.webp", "img2"=>"motivist-japan2.webp", "img3"=>"motivist-japan3.webp", "img4"=>"motivist-japan4.webp");

		$projects['RZMotorskenya'] = array("title" => $rz_motors_kenya_title, "content" =>$rz_motors_kenya_content, "main_img"=>"MAIN-RZ-MOTORS.webp", "img1"=>"rz-motors1.webp", "img2"=>"rz-motors2.webp", "img3"=>"rz-motors3.webp", "img4"=>"rz-motors4.webp");

		$projects['GVehicles'] = array("title" => $gvehicle_title, "content" =>$gvehicle_content, "main_img"=>"MAIN-GVIHICLE.webp", "img1"=>"gvihicle1.webp", "img2"=>"gvihicle2.webp", "img3"=>"gvihicle3.webp", "img4"=>"gvihicle4.webp");

		$projects['Sultancurry'] = array("title" => $sultancurry_title, "content" =>$sultancurry_content, "main_img"=>"MAIN-SULTAN-CURRY.webp", "img1"=>"sultan-curry1.webp", "img2"=>"sultan-curry2.webp", "img3"=>"sultan-curry3.webp", "img4"=>"sultan-curry4.webp");

		$projects['Quant-Box'] = array("title" => $quant_box_title, "content" =>$quant_box_content, "main_img"=>"MIAN-QUANTBOX.webp", "img1"=>"quantbox1.webp", "img2"=>"quantbox2.webp", "img3"=>"quantbox3.webp", "img4"=>"quantbox4.webp");

		$projects['Autohauschile'] = array("title" => $autohaus_chile_title, "content" =>$autohaus_chile_content, "main_img"=>"MAIN-AUTOHAUSCHILLI.webp", "img1"=>"autohauschilli1.webp", "img2"=>"autohauschilli2.webp", "img3"=>"autohauschilli3.webp", "img4"=>"autohauschilli4.webp");

		$projects['Autohausphil'] = array("title" => $autohaus_phill_title, "content" =>$autohaus_phill_content, "main_img"=>"MAIN-AUTOHAUSPHILL.webp", "img1"=>"autohausphill1.webp", "img2"=>"autohausphill2.webp", "img3"=>"autohausphill3.webp", "img4"=>"autohausphill4.webp");

		$projects['Autohausmachinery'] = array("title" => $autocraft_machinary_tilte, "content" =>$autocraft_machinary_content, "main_img"=>"MAIN-AUTOCRAFT-MACHINARY.webp", "img1"=>"autocraft-machinary1.webp", "img2"=>"autocraft-machinary2.webp", "img3"=>"autocraft-machinary3.webp", "img4"=>"autocraft-machinary4.webp");

		$projects['Reliancemotors'] = array("title" => $reliance_title, "content" =>$reliance_content, "main_img"=>"MAIN-RELIANCE-MOTORS.webp", "img1"=>"reliance-motors1.webp", "img2"=>"reliance-motors2.webp", "img3"=>"reliance-motors3.webp", "img4"=>"reliance-motors4.webp");

		$projects['jcb-alliance'] = array("title" => $jcb_alliance_title, "content" =>$jcb_alliance_content, "main_img"=>"MAIN-JCBALLIANCE.webp", "img1"=>"jc-balliance1.webp", "img2"=>"jc-balliance2.webp", "img3"=>"jc-balliance3.webp", "img4"=>"jc-balliance4.webp");


		$flag=0;
		foreach($projects as $key=>$v){
			if($project_request == $key){
				$flag=1;
				$data = $v;
			}
		}
		if($flag==0){
			include("not-found/".$folder.'.php');
		}
		else{
			include("projects-detail/".$folder.'.php');
		}
	}
	else{
		include($folder.'.php');
	}
	?>