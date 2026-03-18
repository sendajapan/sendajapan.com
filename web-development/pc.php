<!DOCTYPE html>
<html lang="en">
<?php include(APP_PATH.'/assets/public/web/head.php'); ?>
  <body>
  <?php include(APP_PATH.'/assets/public/web/menu.php'); ?>

	<div class="about-us-hero-bg"></div>
	<div class="container breadcrumb_container">
		<div class="breadcrumb">
			<h4 class="page-title family-open-sans"><?=$webdevelopmentpage_header_title?></h4>
			<h2 class="page-heading family-montserrat"><?=$webdevelopmentpage_header_heading?></h2>
		</div>
	</div>



	<div class="container services-container">
		<div class="row no-gutters pc_layout">
			<div class="col-md-12 our-services">
				<div class="our_services_main_img">
					<img class="services_detail_main_img" src="<?=APP_URL?>assets/images/web/homepage/web-development-services.webp" alt="web development services">
				</div>
				<div class="content">
					<h3 class="services-title family-open-sans"><?=$webdevelopmentpage_header_title?></h3>
					<h2 class="services-heading family-open-sans"><?=$webdevelopmentpage_web_development?></h2>
					<p class="services-content text_black family-montserrat"><?=$webdevelopmentpage_web_development_content?></p>
				</div>
			</div>
		</div>


		<div class="row graphic_design_main_div laptopt_layout">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h3 class="services-title family-open-sans"><?=$webdevelopmentpage_header_title?></h3>
				<h2 class="services-heading family-open-sans"><?=$webdevelopmentpage_web_development?></h2>
				<p class="services-content text_black family-montserrat"><?=$webdevelopmentpage_web_development_content?></p>
			</div>
		</div>


	</div>

<br><br><br><br>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="family-open-sans web-detail-title"><?=$webdevelopmentpage_web_services_detail?></h3>
				<h2 class="family-open-sans web-detail-heading"><?=$webdevelopmentpage_develoment_platforms?></h2>
				<P class="family-montserrat web-detail-head-content"><?=$webdevelopmentpage_develoment_platforms_content?></P>
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-11 web-development-detail">
				<div class="web-development-box php-web" id="box_style_1" onmouseover="call('1', 'active')" onmouseout="call('1', 'out')">
					<h3 class="heading family-montserrat"><?=$webdevelopmentpage_php_web_dev?></h3>
					<p class="content family-montserrat"><?=$webdevelopmentpage_php_web_dev_content?></p>
					<a aria-label="logo" id="goto" class="goto"> <img src="<?=APP_URL?>assets/images/web/homepage/goto-arrow-white.webp" alt=""> </a>
				</div>
				<div class="web-development-box flash-web" id="box_style_2" onmouseover="call('2', 'active')" onmouseout="call('2', 'out')">
					<h3 class="heading family-montserrat"><?=$webdevelopmentpage_mob_app?></h3>
					<p class="content family-montserrat"><?=$webdevelopmentpage_mob_app_content?></p>
					<a aria-label="logo" class="goto"> <img src="<?=APP_URL?>assets/images/web/homepage/goto-arrow-white.webp" alt=""> </a>
				</div>
				<div class="web-development-box wordpress" id="box_style_3" onmouseover="call('3', 'active')" onmouseout="call('3', 'out')">
					<h3 class="heading family-montserrat"><?=$webdevelopmentpage_wordpress?></h3>
					<p class="content family-montserrat"><?=$webdevelopmentpage_wordpress_content?></p>
					<a aria-label="logo" class="goto"> <img src="<?=APP_URL?>assets/images/web/homepage/goto-arrow-white.webp" alt=""> </a>
				</div>	
			</div>
		</div>
	</div>

<br><br><br><br>


<script>
	function call(box_id, action){
		if(action=="active"){
			var div_selection = document.getElementById('box_style_'+box_id);
			var img_node = div_selection.getElementsByTagName('img')[0];
			img_node.src = "<?=APP_URL?>assets/images/web/homepage/goto-arrow-blue.webp";
		}


		if(action=="out"){
			var div_selection = document.getElementById('box_style_'+box_id);
			var img_node = div_selection.getElementsByTagName('img')[0];
			img_node.src = "<?=APP_URL?>assets/images/web/homepage/goto-arrow-white.webp";
		}
	}


</script>




	<div class="clearfix"></div>



  <?php include(APP_PATH.'/assets/public/web/foot.php'); ?>
  </body>
</html>



