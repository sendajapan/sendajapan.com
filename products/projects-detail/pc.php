<!DOCTYPE html>
<html lang="en">
<?php include(APP_PATH.'/assets/public/web/head.php'); ?>
  <body>
  <?php include(APP_PATH.'/assets/public/web/menu.php'); ?>

	<div class="about-us-hero-bg"></div>
	<div class="container breadcrumb_container">
		<div class="breadcrumb">
			<h4 class="page-title family-open-sans"><?=$easystockpage_header_title?></h4>
			<h2 class="page-heading family-montserrat"><?=$data['title']?></h2>
		</div>
	</div>


<br><br>
	<div class="container services-container">
		<div class="row no-gutters">
			<div class="col-md-12 our-services">
				
				<div class="content">
					<h3 class="services-title family-open-sans"><?=$easystockpage_about_projects?></h3>
					<h2 class="services-heading family-open-sans">About <?=$data['title']?></h2>
					<p class="services-content text_black family-montserrat max_height"><?=$data['content']?></p>
				</div>
				<div class="img border_radius_16px">
					<img class="common_products_projects_detail_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/<?=$data['main_img']?>" alt="demo-alt-tag" width="672" height="560">
				</div>
			</div>
		</div>

		

	</div>


	<div class="container">
		<div class="row pc_services_detail_page">
			<h3 class="easy-stock-heading family-open-sans"><?=$easystockpage_related_detail?></h3>
			<div class="col-lg-12 easy-stock-main-col">
				<?php 
					if ($data['img1'] != "") {
						?>
							<div class="easy-stock-box">
								<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/projects/<?=$data['img1']?>" alt="demo-alt-tag" width="336" height="231">
							</div>
						<?php
					}if($data['img2'] != ""){
						?>
							<div class="easy-stock-box">
								<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/projects/<?=$data['img2']?>" alt="demo-alt-tag" width="336" height="231">
							</div>
						<?php
					}if($data['img3'] != ""){
						?>
							<div class="easy-stock-box">
								<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/projects/<?=$data['img3']?>" alt="demo-alt-tag" width="336" height="231">
							</div>
						<?php
					}if($data['img4'] != ""){
						?>
							<div class="easy-stock-box">
								<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/projects/<?=$data['img4']?>" alt="demo-alt-tag" width="336" height="231">
							</div>
						<?php
					}else{
						?>
							<h3 style="padding:10px"> NO IMAGE FOUND </h3>
						<?php
					}
					?>		
			</div>
		</div>
	</div>

<br><br><br><br>







	<div class="clearfix"></div>



  <?php include(APP_PATH.'/assets/public/web/foot.php'); ?>
  </body>
</html>



