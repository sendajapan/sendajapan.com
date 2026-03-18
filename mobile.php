
<!DOCTYPE html>
<html lang="en">

<!-- <link rel="stylesheet" href="<?=APP_URL?>assets/css/filter_style.css" /> -->
<link rel="stylesheet" href="<?=APP_URL?>assets/css/filter_style_min.css" />
<!-- <link rel="stylesheet" href="<?=APP_URL?>assets/css/jssor_style.css" /> -->
<link rel="stylesheet" href="<?=APP_URL?>assets/css/jssor_style_min.css" />
<?php include(APP_PATH.'/assets/public/mobile/head.php'); ?>


  <div class="top_container">
	<div class="top_bg_main"></div>
	<div class="top_shade_main"></div>
	<a aria-label="logo" href="<?=APP_URL?>" aria-label="logo"><div class="rz_logo"></div></a>
		<div class="main_page_breadcrumb">
			<p class="small-text text-blue bold line-blue-before hero-creative-agency"><?=$homepage_header_creative_agency?></p>
			<p class="big-text full-bold <?php if($language=='en'){echo "hero-title";}else{echo "hero-title-jp";} ?> text-blue"><?=$homepage_header_creative_title?></p>
			<a href="<?=APP_URL?>contact/" class="family-open-sans homepage_hero_btn home_hero_btn_inactive"><?=$homepage_header_button2?></a>
			<!-- <a href="" class="family-open-sans homepage_hero_btn home_hero_btn_inactive"><?=$homepage_header_button1?></a> -->

		</div>

		<!-- ABOUT US -->
	<?php include(APP_PATH.'/assets/public/mobile/about-us.php'); ?>
	
	<!-- OUR MISSION -->
	<?php include(APP_PATH.'/assets/public/mobile/our-mission.php'); ?>
		

		<!-- HOME PAGE OUR SERVICES -->
		<section class="homepage_our_services">
			<h3 class="family-open-sans home_our_services_title"><?=$homepage_our_services_title?></h3>
			<h2 class="family-open-sans home_our_services_heading"><?=$homepage_our_services_heading?></h2>
			<p class="family-montserrat home_our_services_text"><?=$homepage_header_text?></p><br>

			<div class="our_services_box home_app_development_box">
				<h3 class="family-open-sans home_services_box_heading"><?=$homepage_our_services_graphic_design?></h3>
				<p class="family-montserrat home_services_box_content"><?=$homepage_our_services_graphic_design_desc?></p>
				<a href="<?=APP_URL?>graphic-design/" class="family-open-sans home_services_box_read_more"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>

			<div class="our_services_box home_web_development_box">
				<h3 class="family-open-sans home_services_box_heading"><?=$homepage_our_services_web_development?></h3>
				<p class="family-montserrat home_services_box_content"><?=$homepage_our_services_web_development_desc?></p>
				<a href="<?=APP_URL?>web-development/" class="family-open-sans home_services_box_read_more"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>

			<div class="our_services_box home_software_solution_box">
				<h3 class="family-open-sans home_services_box_heading"><?=$homepage_our_services_software_solution?></h3>
				<p class="family-montserrat home_services_box_content"><?=$homepage_our_services_software_solution_desc?></p>
				<a href="<?=APP_URL?>software-solutions/" class="family-open-sans home_services_box_read_more"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>

			<div class="our_services_box home_internet_marketing_box">
				<h3 class="family-open-sans home_services_box_heading"><?=$homepage_our_services_internet_marketing?></h3>
				<p class="family-montserrat home_services_box_content"><?=$homepage_our_services_internet_marketing_desc?></p>
				<a href="<?=APP_URL?>internet-marketing/" class="family-open-sans home_services_box_read_more"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>

		</section>


		<!-- HOME PAGE OUR WORK -->
		<section class="homepage_our_work">
			<h3 class="family-open-sans home_our_work_product_title text-blue"><?=$homepage_our_work_title?></h3>
			<h2 class="family-open-sans home_our_work_product_heading"><?=$homepage_our_work_recent_products?></h2>
			<p class="family-montserrat home_our_work_product_text"><?=$homepage_our_work_recent_products_text?></p><br>
			<div class="our_product_box home_web_development_box">
				<img class="mobile_products_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/products/AVIS_MAIN.webp" alt="demo-alt-tag" width="336" height="231">
				<h3 class="family-open-sans home_product_box_heading"><?=$homepage_our_work_automated_vehicle_info?></h3>
				<a href="<?=APP_URL?>products/?product=automated-vehicle-information-system" class="family-open-sans home_product_read_more"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>
			<div class="our_product_box home_software_solution_box">
				<img class="mobile_products_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/products/BRANCH_MAIN.webp" alt="demo-alt-tag" width="336" height="231">
				<h3 class="family-open-sans home_product_box_heading"><?=$homepage_our_work_branch_manage_system?></h3>
				<a href="<?=APP_URL?>products/?product=avis-branch-management-system" class="family-open-sans home_product_read_more"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>
			<br><br><br>
			<h2 class="family-open-sans home_our_work_product_heading"><?=$homepage_our_work_heading?></h2><br>
			<div class="our_product_box home_web_development_box">
				<img class="mobile_products_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-AUTOCRAFT.webp" alt="product img">
				<h3 class="family-open-sans home_product_box_heading"><?=$homepage_our_work_autocraftjapan?></h3>
				<a href="<?=APP_URL?>products/?project=Autocraftjapan" class="family-open-sans home_product_read_more"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>
			<div class="our_product_box home_software_solution_box">
				<img class="mobile_products_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-KARMEN.webp" alt="product img">
				<h3 class="family-open-sans home_product_box_heading"><?=$homepage_our_work_karmen?></h3>
				<a href="<?=APP_URL?>products/?project=Karmen" class="family-open-sans home_product_read_more"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>
			<div class="our_product_box home_internet_marketing_box">
				<img class="mobile_products_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-GREENWAYMOTORS.webp" alt="product img">
				<h3 class="family-open-sans home_product_box_heading"><?=$homepage_our_work_greenwaymotors?></h3>
				<a href="<?=APP_URL?>products/?project=GreenwayMotors" class="family-open-sans home_product_read_more"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>
			<div class="our_product_box home_internet_marketing_box">
				<img class="mobile_products_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-AUTOHAUSPHILL.webp" alt="product img">
				<h3 class="family-open-sans home_product_box_heading"><?=$productpage_autohausphil?></h3>
				<a href="<?=APP_URL?>products/?project=Autohausphil" class="family-open-sans home_product_read_more"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="21" height="12"></a>
			</div>
			<a class="home_our_work_view_all_btn family-open-sans" href="<?=APP_URL?>products/">View All</a>
		</section>

		<!-- HOME PAGE COUNT -->
		<section class="count_section">
			<div class="count_box_main">
				<h2 class="family-open-sans">15</h2>
				<p class="family-montserrat"><?=$homepage_count_year_experience?></p>
			</div>
			<div class="count_box">
				<h2 class="family-open-sans">250+</h2>
				<p class="family-montserrat"><?=$homepage_count_project_finished?></p>
			</div>
			<div class="count_box">
				<h2 class="family-open-sans">4.95+</h2>
				<p class="family-montserrat"><?=$homepage_count_rating?></p>
			</div>
			<div class="count_box">
				<h2 class="family-open-sans">210+</h2>
				<p class="family-montserrat"><?=$homepage_count_satisfied_clients?></p>
			</div>
			<div class="count_box">
				<h2 class="family-open-sans">13k+</h2>
				<p class="family-montserrat"><?=$homepage_count_days_work?></p>
			</div>
		</section>

		
		<?php 
			$testimonials[] = array('content' => 'I love you the more in that I believe you had liked me for my own sake and for nothing else', 'name' => 'John Keats', 'img' =>'testi1.webp');
			$testimonials[] = array('content' => 'But man is not made for defeat. A man can be destroyed but not defeated.But man is not made for defeat. A man can be destroyed but not defeated.', 'name' => 'Ernest Hemingway', 'img' =>'testi2.webp');
			$testimonials[] = array('content' => 'I have not failed. Ive just found 10,000 ways that wont work.', 'name' => 'Thomas A. Edison', 'img' =>'testi3.webp');
			$testimonials[] = array('content' => 'Demo demo demo demo demo   I have not failed. Ive just found 10,000 ways that wont work.', 'name' => 'sohail ahmad', 'img' =>'testi4.webp');
		?>
		<!-- TESTIMONIAL -->
		<section class="testimonial">
			<h3 class="family-open-sans testimonial_title"><?=$homepage_testimonial_title?></h3>
			<h2 class="family-open-sans testimonial_heading"><?=$homepage_testimonial_heading?></h2><br>
			

			<div class="slideshow-container">
				<?php
					if(is_array($testimonials)){
						foreach($testimonials as $val){ ?>
								<div class="mySlides">
								  <img class="testimonial-icon" src="<?=APP_URL?>assets/images/web/homepage/testimonial-icon.webp" alt="demo-alt-tag" width="30" height="24">
								  <q class="family-montserrat"><?=$val["content"]?></q>
								  <p class="author family-montserrat">- <?=$val["name"]?></p>
								  <img class="star-rating" src="<?=APP_URL?>assets/images/web/homepage/testimonial-star.webp" alt="demo-alt-tag" width="76" height="11">
								  <img class="testimonial-img" src="<?=APP_URL?>assets/images/web/homepage/<?=$val["img"]?>" alt="demo-alt-tag" width="80" height="80">
								</div>
						<?php }
					}
				?>


							
						</div>



						<div class="dot-container">
							<a class="prev" onclick="plusSlides(-1)"><img src="<?=APP_URL?>assets/images/web/homepage/Vector-left.webp" alt="left vector" width="14" height="11"></a>
							<a class="next" onclick="plusSlides(1)"><img src="<?=APP_URL?>assets/images/web/homepage/Vector-right.webp" alt="right Vector" width="14" height="11"></a>
						</div>

		</section>
		




	

  </div>





<?php include(APP_PATH.'/assets/public/mobile/foot.php'); ?>



<script src="<?=APP_URL?>assets/js/filter-tags.js"></script>
<script type="text/javascript" src="<?=APP_URL?>assets/js/jssor.slider.min.js"></script>
<script type="text/javascript" src="<?=APP_URL?>assets/js/jssor-init.js"></script>
<script>
jssor_1_slider_init();
jssor_slider2_init();
jssor_slider3_init();

$(document).ready(function () {
	setTimeout(function() { 
	  $('#testimonial_section').show();
	  $('#team_section').show();
	}, 3000);
});

</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>