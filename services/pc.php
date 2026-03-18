<!DOCTYPE html>
<html lang="en">
<?php include(APP_PATH.'/assets/public/web/head.php'); ?>
  <body>
  <?php include(APP_PATH.'/assets/public/web/menu.php'); ?>

	<div class="about-us-hero-bg"></div>
	<div class="container breadcrumb_container">
		<div class="breadcrumb">
			<h4 class="page-title family-open-sans services_page_title"><?=$servicespage_header_title?></h4>
			<h2 class="page-heading family-montserrat"><?=$servicespage_header_heading?></h2>
		</div>
	</div>
	
	<div class="container services-container">
		<br><br><br>
		<div class="row our-services">
			<div class="col-lg-6 col-md-6 col-sm-6 content text-center">
				<h3 class="services-title family-open-sans"><?=$graphicdesignpage_title?></h3>
				<h2 class="services-heading family-open-sans"><?=$graphicdesignpage_heading?></h2>
				<p class="services-content text_black family-montserrat"><?=$graphicdesignpage_content?></p>
				<a class="services-anchor family-montserrat" href="<?=APP_URL?>graphic-design/"><?=$servicespage_learn_more?></a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img class="services_main_img" src="<?=APP_URL?>assets/images/web/homepage/graphic-design.webp" alt="demo-alt-tag" width="672" height="560">
			</div>
		</div>
		<div class="pc-margin-bottom"></div>
		<div class="row our-services">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img class="services_main_img" src="<?=APP_URL?>assets/images/web/homepage/web-development-services.webp" alt="demo-alt-tag" width="672" height="560">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 content">
				<h3 class="services-title family-open-sans"><?=$servicespage_development?></h3>
				<h2 class="services-heading family-open-sans"><?=$servicespage_web_development?></h2>
				<p class="services-content text_black family-montserrat"><?=$webdevelopmentpage_web_development_content?></p>
				<a class="services-anchor family-montserrat" href="<?=APP_URL?>web-development/"><?=$servicespage_learn_more?></a>
			</div>
		</div>
		<div class="pc-margin-bottom"></div>


		<div class="row our-services">
			<div class="col-lg-6 col-md-6 col-sm-6 content">
				<h3 class="services-title family-open-sans"><?=$servicespage_software?></h3>
				<h2 class="services-heading family-open-sans"><?=$servicespage_software_solution?></h2>
				<p class="services-content text_black family-montserrat"><?=$softwaresolutionpage_software_development_content?></p>
				<a class="services-anchor family-montserrat" href="<?=APP_URL?>software-solutions/"><?=$servicespage_learn_more?></a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img class="services_main_img" src="<?=APP_URL?>assets/images/web/homepage/software-solution-services.webp" alt="demo-alt-tag" width="672" height="560">
			</div>
		</div>
		<div class="pc-margin-bottom"></div>


		<div class="row our-services">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<img class="services_main_img" src="<?=APP_URL?>assets/images/web/homepage/internet-marketing-services.webp" alt="demo-alt-tag" width="672" height="560">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 content">
				<h3 class="services-title family-open-sans"><?=$servicespage_marketing?></h3>
				<h2 class="services-heading family-open-sans"><?=$servicespage_internet_marketing?></h2>
				<p class="services-content text_black family-montserrat"><?=$internetmarketingpage_header_heading_content?></p>
				<a class="services-anchor family-montserrat" href="<?=APP_URL?>internet-marketing/"><?=$servicespage_learn_more?></a>
			</div>
		</div>
	</div>
<div class="clearfix"></div>
<div class="margin-bottom"></div>


  <?php include(APP_PATH.'/assets/public/web/foot.php'); ?>
  </body>
</html>



