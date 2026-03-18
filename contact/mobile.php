<!DOCTYPE html>
<html lang="en">
<?php include(APP_PATH.'/assets/public/mobile/head.php'); ?>

  <div class="top_container">
	<div class="top_bg2"></div>
	<div class="top_shade"></div>
	<a href="<?=APP_URL?>" aria-label="RZ Logo"><div class="rz_logo"></div></a>
		<div class="breadcrumb about_us_hero">
			<h2 class="easystockpage_hero_title family-open-sans"><?=$contactpage_header_title?></h2>
			<h2 class="easystockpage_hero_heading family-family-montserrat"><?=$contactpage_header_heading?></h2>
		</div>

		<section class="contact_section">
			<h3 class="family-open-sans get-in-toch-text text-center"><?=$contactpage_send_inquiry?></h3>
			<div class="form_div">
				<form action="">
					<h4 class="form-heading family-open-sans"><?=$contactpage_personal_info?></h4>
					<label for="" class="family-montserrat"> <span class="required">*</span><?=$contactpage_name?></label><br>
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
					<input type="text" placeholder="Company Name (optional)" name="company_name" id="company_name">

					<br><br>

					<label for="" class="family-montserrat"><?=$contactpage_website?></label><br>
					<input type="text" placeholder="<?=$contactpage_website?> " name="website" id="website">

					<br><br>

					<label for="" class="family-montserrat"><span class="required">*</span><?=$contactpage_msg_detail?></label><br>
					<textarea placeholder="<?=$contactpage_msg_detail?>" name="detail" id="detail"></textarea>
					<br><br><br>
					
					<button type="submit" id="form_submit" class="submit-btn family-open-sans"><?=$contactpage_send_message?></button>
					<br><br>
					<div class="form_submit_msg family-montserrat">
						<?=$contactpage_success_msg?>
					</div>
					<div class="error_response family-montserrat">
						<?=$contactpage_failed_msg?>
					</div>
					<div class="email_correction family-montserrat">
						<?=$contactpage_email_correction_msg?>
					</div>
				</form>
			</div>
			<br><br>
			<h3 class="family-open-sans get-in-toch-text text-center"><?=$contactpage_get_in_touch?></h3>
			<h3 class="family-open-sans black_heading"><?=$contactpage_senda_japan?></h3>
			<p class="family-montserrat contact_company_text margin_top"><?=$contactpage_senda_japan_content?></p>

			<h3 class="family-open-sans black_heading"><?=$contactpage_company_detail?></h3>

			<h5 class="family-open-sans blue_heading"><?=$contactpage_telephone?></h5>
			<p class="family-montserrat margin_top">+81-3-5812-4074</p>

			<h5 class="family-open-sans blue_heading"><?=$contactpage_fax?></h5>
			<p class="family-montserrat margin_top">+81-3-5812-4074</p>

			<h5 class="family-open-sans blue_heading"><?=$contactpage_email?></h5>
			<p class="family-montserrat margin_top">info@sendajapan.com</p>

			<h5 class="family-open-sans blue_heading"><?=$contactpage_location?></h5>
			<p class="family-montserrat margin_top">8F Ueno Ekimae Building 3-18-7 Higashi Ueno Taito-ku, Tokyo 110-0015 Japan</p>


			<h2 class="family-open-sans contact_google_map_heading"><?=$contactpage_google_map?></h2>
			
			<div class="google_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d768.1417570724867!2d139.77739350740504!3d35.711192356753784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ff89d461a0b%3A0x5a69662b084270dd!2sAUTOCRAFT%20JAPAN%20LTD!5e1!3m2!1sen!2sus!4v1720369881814!5m2!1sen!2sus"></iframe>
            </div>

		</section>

  </div>



<?php include(APP_PATH.'/assets/public/mobile/foot.php'); ?>
<script>
	$(document).ready(function(){
		$('#form_submit').click(function(e){
			e.preventDefault();
			var email   = $('#email').val();
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			
			
			var name    = $('#name').val();
			var phone   = $('#phone').val();
			var company_name = $('#company_name').val();
			var website = $('#website').val();
			var detail = $('#detail').val();
			$('#form_submit').html('Submitting .... ');
			if (name=='' || email=='' || phone=='' || detail=='') {
				$('.form_submit_msg').html("<?=$contactpage_failed_msg?>");
			 			$('.error_response').fadeIn(1000);
						$('.error_response').fadeOut(5000);
						$('#form_submit').html('SUBMIT NOW');
			}else{
					if (regex.test(email)) {
						$.ajax({
						url: "mail.php",
						method: "POST",
						data: {name:name,email:email,phone:phone,company_name:company_name,website:website,detail:detail},
						success: function(data){
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
		$("html,body").animate({scrollTop: 400}, 1000);
	});
</script>