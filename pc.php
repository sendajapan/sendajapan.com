<!DOCTYPE html>
<html lang="en">
<!-- <link rel="stylesheet" href="<?=APP_URL?>assets/css/filter_style.css" /> -->
<link rel="stylesheet" href="<?=APP_URL?>assets/css/filter_style_min.css" />
<!-- <link rel="stylesheet" href="<?=APP_URL?>assets/css/jssor_style.css" /> -->
<link rel="stylesheet" href="<?=APP_URL?>assets/css/jssor_style_min.css" />
<?php include(APP_PATH.'/assets/public/web/head.php'); ?>
  <body>

  <?php include(APP_PATH.'/assets/public/web/menu.php'); ?>

	<div class="top_bg_main"></div>
	<!-- HERO -->
	<div class="container breadcrumb_main_container">
		<div class="main_page_breadcrumb">
			<p class="small-text text-blue bold line-blue-before family-montserrat"><?=$homepage_header_creative_agency?></p>
			<p class="big-text full-bold family-montserrat"><?=$homepage_header_creative_title?></p>
			<p class="small-text text-black">
				<?=$homepage_header_text1?>
			</p>

			<p class="hero-btns">
				<a aria-label="Join Now family-montserrat" class="active" target="_blank">
					<?=$homepage_header_button1?>
				</a>
				<a aria-label="Contact Us family-montserrat" class="non-active" href="<?=APP_URL?>contact/" target="_blank">
					<?=$homepage_header_button2?>
				</a>	
			</p>

		</div>
	</div>

	<!-- ABOUT US -->
	<?php include(APP_PATH.'/assets/public/web/about-us.php'); ?>
	<br><br><br>

	<!-- OUR MISSION -->
	<?php include(APP_PATH.'/assets/public/web/our-mission.php'); ?>
	<br><br><br><br>

	<!-- SERVICES -->
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-white text-center family-open-sans services-title"><?=$homepage_our_services_title?></h4>
					<h3 class="text-white text-center family-open-sans services-heading"><?=$homepage_our_services_heading?></h3>
					<p class="text-white services-content text-center family-montserrat"><?=$homepage_header_text?></p>
				</div>
			</div>
			<br><br>
			<div class="row border">
				<div class="col-md-12 main-col">
						<div class="services-branches">
							<img class="main-img" src="<?=APP_URL?>assets/images/web/homepage/Web development icon.webp" alt="demo-alt-tag" width="55" height="55">
							
							<h3 class="family-open-sans title"><?=$homepage_our_services_web_development?></h3>
							<p class="family-montserrat content"><?=$homepage_our_services_web_development_desc?></p>
							<a aria-label="read more" class="family-montserrat" href="<?=APP_URL?>web-development/"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="17" height="9"></a>
						</div>
						<div class="services-branches">
							<img class="main-img" src="<?=APP_URL?>assets/images/web/homepage/software solution icon.webp" alt="demo-alt-tag" width="55" height="55">
							<h3 class="family-open-sans title"><?=$homepage_our_services_software_solution?></h3>
							<p class="family-montserrat content"><?=$homepage_our_services_software_solution_desc?></p>
							<a aria-label="read more" class="family-montserrat" href="<?=APP_URL?>software-solutions/"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="17" height="9"></a>
						</div>
						<div class="services-branches">
							<img class="main-img" src="<?=APP_URL?>assets/images/web/homepage/Digital marketing icon.webp" alt="demo-alt-tag" width="55" height="55">
							<h3 class="family-open-sans title"><?=$homepage_our_services_internet_marketing?></h3>
							<p class="family-montserrat content"><?=$homepage_our_services_internet_marketing_desc?></p>
							<a aria-label="read more" class="family-montserrat" href="<?=APP_URL?>internet-marketing/"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="17" height="9"></a>
						</div>
						<div class="services-branches">
							<img class="main-img" src="<?=APP_URL?>assets/images/web/homepage/App Development icon.webp" alt="demo-alt-tag" width="55" height="55">
							<h3 class="family-open-sans title"><?=$homepage_our_services_graphic_design?></h3>
							<p class="family-montserrat content"><?=$homepage_our_services_graphic_design_desc?></p>
							<a aria-label="read more" class="family-montserrat" href="<?=APP_URL?>graphic-design/"><?=$homepage_our_services_read_more?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="17" height="9"></a>
						</div>
				</div>
			</div>
		</div>
	</div>

	<!-- OUR WORK -->
	<div class="our-work">
		<div class="container">
			<div class="row main-row">
				<div class="col-12">
					<h4 class="text-blue text-center family-open-sans our-work-title"><?=$homepage_our_work_title?></h4>
					<h3 class="text-black text-center family-open-sans our-work-heading"><?=$homepage_our_work_recent_products?></h3>
					<!-- <p class="text-black our-work-content text-center family-montserrat"><?=$homepage_our_work_recent_products_text?></p> -->
				</div>
			</div>
			<br><br>
				
			<div class="row">
				<div class="col-12 main-box">
					<div class="item-box">
						<a aria-label="View All" href="<?=APP_URL?>products/?product=automated-vehicle-information-system"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/products/AVIS_MAIN.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_automated_vehicle_info?></h3>
						<a aria-label="View All" href="<?=APP_URL?>products/?product=automated-vehicle-information-system" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
					<div class="item-box">
						<a aria-label="View All" href="<?=APP_URL?>products/?product=financial-properties-management-system"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/products/FAM_MAIN.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_financial_property_manage_system?></h3>
						<a aria-label="View All" href="<?=APP_URL?>products/?product=financial-properties-management-system" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
					<div class="item-box">
						<a aria-label="View All" href="<?=APP_URL?>products/?product=avis-branch-management-system"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/products/BRANCH01.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_branch_manage_system?></h3>
						<a aria-label="View All" href="<?=APP_URL?>products/?product=avis-branch-management-system" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
				</div>
			</div>
			<div class="row main-row">
				<div class="col-12">
					<h3 class="text-black text-center family-open-sans our-work-heading"><?=$homepage_our_work_heading?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12 main-box">
					<div class="item-box">
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Autocraftjapan"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-AUTOCRAFT.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_autocraftjapan?></h3>
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Autocraftjapan" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
					<div class="item-box">
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Karmen"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-KARMEN.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_karmen?></h3>
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Karmen" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
					<div class="item-box">
						<a aria-label="view all" href="<?=APP_URL?>products/?project=GreenwayMotors"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-GREENWAYMOTORS.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_greenwaymotors?></h3>
						<a aria-label="view all" href="<?=APP_URL?>products/?project=GreenwayMotors" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 main-box">
					<div class="item-box">
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Motivistjapan"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MIAN-MOTIVIST-JAPAN.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_motivistjapan?></h3>
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Motivistjapan" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
					<div class="item-box">
						<a aria-label="view all" href="<?=APP_URL?>products/?project=RZMotorskenya"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-RZ-MOTORS.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_rzmotorskenya?></h3>
						<a aria-label="view all" href="<?=APP_URL?>products/?project=RZMotorskenya" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
					<div class="item-box">
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Autohauschile"><img class="homepage_product_project_main_img" src="<?=APP_URL?>assets/images/web/homepage/projects/MAIN-GVIHICLE.webp" alt="demo-alt-tag" width="336" height="231"></a>
						
						<h3 class="title family-open-sans"><?=$homepage_our_work_autohauschile?></h3>
						<a aria-label="view all" href="<?=APP_URL?>products/?project=Autohauschile" class="link family-montserrat"><?=$homepage_our_work_view_full_projects?> <img src="<?=APP_URL?>assets/images/web/homepage/arrow.webp" alt="demo-alt-tag" width="19" height="11"> </a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center view_all_our_work">
					<a href="<?=APP_URL?>products/" class="view-all"><?=$homepage_our_work_view_all_btn?></a>
				</div>
			</div>


		</div>
	</div>
<br><br>

	<!-- COUNT -->
	<div class="count">
		<div class="container">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-11">
					<div class="parent">
						<div class="child child1">
							<h3 class="box-count family-open-sans">15</h3>
							<a aria-label="count" class="count-link family-montserrat"><?=$homepage_count_year_experience?></a>
						</div>
						<div class="child">
							<div class="child-box box1">
								<h3 class="box-count family-open-sans">250+</h3>
								<a aria-label="count" class="count-link family-montserrat"><?=$homepage_count_project_finished?></a>
							</div>
							<div class="child-box box2">
								<h3 class="box-count family-open-sans">4.95+</h3>
								<a aria-label="count" class="count-link family-montserrat"><?=$homepage_count_rating?></a>
							</div>
						</div>
						<div class="child">
							<div class="child-box box3">
								<h3 class="box-count family-open-sans">210+</h3>
								<a aria-label="count" class="count-link family-montserrat"><?=$homepage_count_satisfied_clients?></a>
							</div>
							<div class="child-box box4">
								<h3 class="box-count family-open-sans">13K+</h3>
								<a aria-label="count" class="count-link family-montserrat"><?=$homepage_count_days_work?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LOGOS -->
	<div class="logos">
		<img src="<?=APP_URL?>assets/images/web/homepage/Autohaus.webp" alt="demo-alt-tag" width="150" height="80">
		<img src="<?=APP_URL?>assets/images/web/homepage/Global USA.webp" alt="demo-alt-tag" width="150" height="80">
		<img src="<?=APP_URL?>assets/images/web/homepage/ARM.webp" alt="demo-alt-tag" width="150" height="80">
		<img src="<?=APP_URL?>assets/images/web/homepage/Imperial Auto.webp" alt="demo-alt-tag" width="150" height="80">
		<img src="<?=APP_URL?>assets/images/web/homepage/karmen-logo.webp" alt="demo-alt-tag" width="150" height="80">
		<img src="<?=APP_URL?>assets/images/web/homepage/RZ Mototrs Kenya.webp" alt="demo-alt-tag" width="150" height="80">
		<img src="<?=APP_URL?>assets/images/web/homepage/Ac tech.webp" alt="demo-alt-tag" width="150" height="80">
		<img src="<?=APP_URL?>assets/images/web/homepage/ACJ.webp" alt="demo-alt-tag" width="150" height="80">
	</div>

<?php 
	$testimonials[] = array('content' => 'We highly recommend Senda Japan Ltd. for their exceptional work in developing our car selling website.', 'name' => 'Autocraft Japan Ltd', 'img' =>'ACJ.webp');
	$testimonials[] = array('content' => 'Thanks to Senda Japan Ltd., we have a user-friendly and visually appealing platform that has transformed our business.', 'name' => 'Karmen', 'img' =>'karmen-logo.png');
	$testimonials[] = array('content' => 'The professionalism and dedication of Senda Japan Ltd. resulted in a website that exceeded our expectations.', 'name' => 'Imperial Auto', 'img' =>'Imperial Auto.png');
?>
	<!-- TESTIMONIAL -->
	<div class="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4 class="text-white text-center family-open-sans tesitmonial-title"><?=$homepage_testimonial_title?></h4>
					<h3 class="text-white text-center family-open-sans testimonial-heading"><?=$homepage_testimonial_heading?></h3>
				</div>
			</div>
			<br><br>
			<div class="row border">
				<div class="col-md-2"></div>
				<div class="col-md-8">
						<div class="slideshow-container">
							 <?php
								if(is_array($testimonials)){
									foreach($testimonials as $val){ ?>
											<div class="mySlides">
											  <img class="testimonial-icon" src="<?=APP_URL?>assets/images/web/homepage/testimonial-icon.webp" alt="demo-alt-tag" width="30" height="24">
											  <q class="family-montserrat"><?=$val["content"]?></q>
											  <p class="author family-montserrat">- <?=$val["name"]?></p>
											  <img class="star-rating" src="<?=APP_URL?>assets/images/web/homepage/testimonial-star.webp" alt="demo-alt-tag" width="125" height="18">
											  <img class="testimonial-img" src="<?=APP_URL?>assets/images/web/homepage/<?=$val["img"]?>" alt="demo-alt-tag"
                                                   style="margin: 0 !important;
                                                        margin-top: 40px !important;
                                                        background-color: rgba(255,255,255,0.95);
                                                        bottom: 20px !important; padding-inline: 8px"
                                              >
											</div>
									<?php }
								}
							?>
						</div>
						<div class="dot-container">
							<a aria-label="Direction Icon" class="prev" onclick="plusSlides(-1)"><img src="<?=APP_URL?>assets/images/web/homepage/Vector-left.webp" alt="left vector" width="14" height="11"></a>
							<a aria-label="Direction Icon" class="next" onclick="plusSlides(1)"><img src="<?=APP_URL?>assets/images/web/homepage/Vector-right.webp" alt="right Vector" width="14" height="11"></a>
						</div>
				</div>
			</div>
		</div>
	</div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            const dots = document.getElementsByClassName("dot");
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

    <?php include(APP_PATH.'/assets/public/web/foot.php'); ?>
  </body>
</html>


<script src="<?=APP_URL?>assets/js/filter-tags.js"></script>
<script type="text/javascript" src="<?=APP_URL?>assets/js/jssor.slider.min.js"></script>
<script type="text/javascript" src="<?=APP_URL?>assets/js/jssor-init_web.js"></script>
<script>
jssor_1_slider_init();
jssor_slider2_init();
jssor_slider3_init();
</script>


<script>
function section_box_flip(box_number){
	document.getElementById('section_box_'+box_number).style.display = 'none';
	document.getElementById('section_box_'+box_number+'_active').style.display = 'block';
}
function section_box_flop(box_number){
	document.getElementById('section_box_'+box_number).style.display = 'block';
	document.getElementById('section_box_'+box_number+'_active').style.display = 'none';
}
</script>
