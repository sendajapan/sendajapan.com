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
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 products_detail_content">
				<h3 class="services-title family-open-sans"><?=$easystockpage_about_products?></h3>
				<h2 class="services-heading family-open-sans">About <?=$data['title']?></h2>
				<p class="services-content text_black family-montserrat"><?=$data['content']?></p>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 products_detail_img">
				<img class="common_products_projects_detail_main_img" src="<?=APP_URL?>assets/images/web/homepage/products/<?=$data['main_img']?>" alt="demo-alt-tag" width='672' height='560'>
			</div>
		</div>



<!-- 		<div class="row no-gutters">
			<div class="col-md-12 our-services">
				
				<div class="content">
					<h3 class="services-title family-open-sans"><?=$easystockpage_about_products?></h3>
					<h2 class="services-heading family-open-sans">About <?=$data['title']?></h2>
					<p class="services-content family-montserrat"><?=$data['content']?></p>
				</div>

				<div class="pc_product_deail_main_img border_radius_16px">
					<img src="<?=APP_URL?>assets/images/web/homepage/products/<?=$data['main_img']?>" alt="demo-alt-tag" width='732' height='503'>
				</div>
			</div>
		</div> -->

		

	</div>

<br>

<div class="container">
	<h3 class="easy-stock-heading family-open-sans"><?=$easystockpage_related_detail?></h3>
	<div class="row">
		<?php 
			if ($data['img1'] != "") {
				?>
					<div class="col-lg-3 col-md-3 col-sm-3 ">
						<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/products/<?=$data['img1']?>" alt="demo-alt-tag" width="336" height="280">
					</div>
				<?php
			}if($data['img2'] != ""){
				?>
					<div class="col-lg-3 col-md-3 col-sm-3 ">
						<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/products/<?=$data['img2']?>" alt="demo-alt-tag" width="336" height="280">
					</div>
				<?php
			}if($data['img3'] != ""){
				?>
					<div class="col-lg-3 col-md-3 col-sm-3 ">
						<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/products/<?=$data['img3']?>" alt="demo-alt-tag" width="336" height="280">
					</div>
				<?php
			}if($data['img4'] != ""){
				?>
					<div class="col-lg-3 col-md-3 col-sm-3 ">
						<img class="common_products_projects_detail_img" src="<?=APP_URL?>assets/images/web/homepage/products/<?=$data['img4']?>" alt="demo-alt-tag" width="336" height="280">
					</div>
				<?php
			}else{
				?>
					<h3 class="padding-10"> NO IMAGE FOUND </h3>
				<?php
			}
		?>
	</div>
</div>

<br><br><br><br>







	<div class="clearfix"></div>



  <?php include(APP_PATH.'/assets/public/web/foot.php'); ?>
  </body>
</html>



