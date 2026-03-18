<!DOCTYPE html>
<html lang="en">
<?php include(APP_PATH.'/assets/public/web/head.php'); ?>
  <body>
  <?php include(APP_PATH.'/assets/public/web/menu.php'); ?>

	<div class="about-us-hero-bg"></div>
	<div class="container breadcrumb_container">
		<div class="breadcrumb">
			<h4 class="page-title family-open-sans contact_page_title"><?=$contactpage_header_title?></h4>
			<h2 class="page-heading family-montserrat"><?=$contactpage_header_heading?></h2>
		</div>
	</div>

	<div class="container contact-us">
		<div class="row">
			<div class="col-md-6 padding_zero">
					<h3 class="family-open-sans get-in-toch"><?=$contactpage_get_in_touch?></h3>
			</div>
			<div class="col-md-6">
					<h3 class="family-open-sans get-in-toch send_inquiry_form_title"><?=$contactpage_send_inquiry?></h3>
			</div>
		</div>
		<br>
		<div class="row main-row">
			<div class="col-md-6 info">
					<h3 class="family-open-sans black-heading"><?=$contactpage_senda_japan?></h3>
					<p class="family-montserrat contact-content"><?=$contactpage_senda_japan_content?></p>

					<h3 class="family-open-sans black-heading"><?=$contactpage_company_detail?></h3>
					<div class="company-detail">
						<span style="width:400px;">
							<h5 class="family-open-sans blue-heading"><?=$contactpage_telephone?></h5>
							<p class="family-montserrat">+81-3-5812-4074</p>
						</span>
						<span style="width:400px;">
							<h5 class="family-open-sans blue-heading"><?=$contactpage_fax?></h5>
							<p class="family-montserrat">+81-3-5812-4074</p>
						</span>
                    </div>
					<div class="company-detail">
						<span style="width:400px;">
							<h5 class="family-open-sans blue-heading"><?=$contactpage_email?></h5>
							<p class="family-montserrat margin">info@sendajapan.com</p>
						</span>
						<span style="width:400px;">
							<h5 class="family-open-sans blue-heading"><?=$contactpage_location?></h5>
							<p class="family-montserrat">8F Ueno Ekimae Building 3-18-7 Higashi Ueno Taito-ku, Tokyo 110-0015 Japan</p>
						</span>
					</div>

					<h3 class="family-open-sans black-heading"><?=$contactpage_google_map?></h3>
					<br>
					<div class="google-map-img">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d768.1417570724867!2d139.77739350740504!3d35.711192356753784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ff89d461a0b%3A0x5a69662b084270dd!2sAUTOCRAFT%20JAPAN%20LTD!5e1!3m2!1sen!2sus!4v1720369881814!5m2!1sen!2sus"></iframe>
					</div>

			</div>
			<div class="col-md-6 contact-form">
					<div>
						<form action="">
							<h4 class="form-heading family-open-sans"><?=$contactpage_personal_info?></h4>
							<label for="" class="family-montserrat"><span class="required">*</span><?=$contactpage_name?></label><br>
							<input type="text" placeholder="<?=$contactpage_name?>" name="name" id="name">

							<br><br>

							<label for="" class="family-montserrat"><span class="required">*</span><?=$contactpage_email?></label><br>
							<input type="email" placeholder="<?=$contactpage_email?>" name="email" id="email">
							<br><br>

							<label for="" class="family-montserrat" required><span class="required">*</span><?=$contactpage_phone?></label><br>
							<input type="text" placeholder="<?=$contactpage_phone?>" name="phone" id="phone">


							<br><br>
							<h4 class="form-heading family-open-sans" required><?=$contactpage_business_detail?></h4>


							<label for="" class="family-montserrat"><?=$contactpage_company_name?></label><br>
							<input type="text" placeholder="<?=$contactpage_company_name_optional?>" name="company_name" id="company_name">

							<br><br>

							<label for="" class="family-montserrat"><?=$contactpage_website?></label><br>
							<input type="text" placeholder="<?=$contactpage_website?>" name="website" id="website">

							<br><br>


							<label for="" class="family-montserrat"><span class="required">*</span><?=$contactpage_msg_detail?></label><br>
							<textarea placeholder="<?=$contactpage_msg_detail?>" name="detail" id="detail"></textarea>
							<br><br><br>
							
							<button type="submit" id="form_submit" class="submit-btn family-open-sans"><?=$contactpage_send_message?></button>
							<br><br>
							<p class="form_submit_msg family-montserrat">
								<?=$contactpage_success_msg?>
							</p>
							<p class="email_correction family-montserrat">
								<?=$contactpage_email_correction_msg?>
							</p>
						</form>
					</div>
			</div>
		</div>
	</div>

<br><br><br><br>

	<div class="clearfix"></div>

  <?php include(APP_PATH.'/assets/public/web/foot.php'); ?>
  </body>
</html>

<script src="<?=APP_URL?>assets/js/jquery-3.6.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('#form_submit').click(function(e){
			e.preventDefault();
			var email   = $('#email').val();
			var regex   = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var name    = $('#name').val();
			var phone   = $('#phone').val();
			var company_name = $('#company_name').val();
			var website = $('#website').val();
			var detail  = $('#detail').val();
			$('#form_submit').html('Submitting .... ');
			if (name=='' || email=='' || phone=='' || detail=='') {
				$('.form_submit_msg').html("<?=$contactpage_failed_msg?>");
			 			$('.form_submit_msg').css('color','red');
			 			$('.form_submit_msg').fadeIn(1000);
						$('.form_submit_msg').fadeOut(5000);
						$('#form_submit').html('SUBMIT NOW');
			}else{
				if (regex.test(email)) {
						$.ajax({
						url: "mail.php",
						method: "POST",
						data: {name:name,email:email,phone:phone,company_name:company_name,website:website,detail:detail},
						success: function(data){
							$('.form_submit_msg').html("<?=$contactpage_success_msg?>");
			 				$('.form_submit_msg').css('color','green');
							$('.form_submit_msg').fadeIn(1000);
							$('.form_submit_msg').fadeOut(5000);
							$('#name').val('');
							$('#email').val('');
							$('#phone').val('');
							$('#company_name').val('');
							$('#website').val('');
							$('#detail').val('');
							$('#form_submit').html('SUBMIT NOW');
						}
					});
				}else{
					$('.email_correction').fadeIn(1000);
					$('.email_correction').fadeOut(5000);
					$('#form_submit').html('SUBMIT NOW');
				}
			}
		});
		$("html,body").animate({scrollTop: 500}, 1000);
	});
</script>

