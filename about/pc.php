<!DOCTYPE html>
<html lang="en">
<?php include(APP_PATH.'/assets/public/web/head.php'); ?>
  <body>
  <?php include(APP_PATH.'/assets/public/web/menu.php'); ?>

	<div class="about-us-hero-bg"></div>
	<div class="container breadcrumb_container">
		<div class="breadcrumb">
			<h4 class="page-title family-open-sans about_us_page_title"><?=$aboutuspage_header_title?></h4>
			<h2 class="page-heading family-montserrat"><?=$aboutuspage_header_heading?></h2>
		</div>
	</div>
		<!-- ABOUT US -->
	<?php include(APP_PATH.'/assets/public/web/about-us.php'); ?>
	<br><br><br><br>
	<?php include(APP_PATH.'/assets/public/web/our-mission.php'); ?>
	<br><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="family-open-sans company-detail-title"><?=$aboutuspage_company_detail_title?></h3>
				<h2 class="family-open-sans company-detail-heading"><?=$aboutuspage_company_detail_heading?></h2>
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-11 company-detail">
				<div class="about-company-box">
					<h2 class="family-open-sans heading"><?=$aboutuspage_contact_details?></h2>
					<p class="content"><?=$aboutuspage_company_name?> : <b>Senda Japan Ltd.</b></p>

					<p class="content"><?=$aboutuspage_founded?> : <b>2007.</b></p>

					<p class="content"><?=$aboutuspage_capital?> : <b>10,000,000 Yen.</b></p>
					<p class="content"><?=$aboutuspage_fax?> : <b>+81-(03)6806-0979.</b></p>

					<p class="content"><?=$aboutuspage_telephone?> : <b>+81-3-5812-4074.</b></p>

					<p class="content"><?=$aboutuspage_email?> : <b>sales@sendajapan.com</b></p>
					<p class="content"><?=$aboutuspage_location?> : <b>Taito Ku, Tokyo</b></p>
					
				</div>
				<div class="about-company-box">
					<h2 class="family-open-sans heading"><?=$aboutuspage_bank_details?></h2>
					<p class="content"><?=$aboutuspage_bank_account?> : <b>The Bank of Tokyo Mitsubishi UFJ, Ltd</b></p>

					<p class="content"><?=$aboutuspage_branch?> : <b>Hongo(351).</b></p>

					<p class="content"><?=$aboutuspage_account?> # :<b> 0059872.</b></p>
					<p class="content"><?=$aboutuspage_bank_address?> : <b>33-5, Hongo, Bunkyo-ku, TOKYO, JAPAN.</b></p>

					<p class="content"><?=$aboutuspage_telephone?> : <b>+81-3-5812-4074.</b></p>

					<p class="content"><?=$aboutuspage_email?> : <b>sales@sendajapan.com</b></p>
					<p class="content"><?=$aboutuspage_swift_code?> : <b>BOTKJPJT</b></p>
					
				</div>
				<div class="about-company-box">
					<h2 class="family-open-sans heading"><?=$aboutuspage_business_details?></h2>
					<!-- <p class="business-details"><?=$aboutuspage_main_business?></p> -->
					<ul class="business_detail_list">
						<li><?=$aboutuspage_main_business?>       </li>
						<li><?=$aboutuspage_product_dev?>         </li>
						<li><?=$aboutuspage_software_dev?>        </li>
						<li><?=$aboutuspage_it_consulting?>       </li>
						<li><?=$aboutuspage_infrastructure?>      </li>
						<li><?=$aboutuspage_graphic_print_design?></li>
						<li><?=$aboutuspage_web_dev?>             </li>
						<li><?=$aboutuspage_e_commerce?>          </li>
						<li><?=$aboutuspage_web_app?>             </li>
						<li><?=$aboutuspage_internet_marketing?>  </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>
	<div class="clearfix"></div>
  <?php include(APP_PATH.'/assets/public/web/foot.php'); ?>
  </body>
</html>



