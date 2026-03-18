<footer>

	<div class="main-footer">
		<div class="footer-div">
			<img src="<?=APP_URL?>assets/images/web/homepage/Senda white logo for footer.webp" alt="logo" width="335" height="60">
			<p class="family-montserrat address"><?=$footer_send_japan_add?></p>
			<span class="social-icon">
			<img src="<?=APP_URL?>assets/images/web/homepage/Facebook icon for footer.webp" alt="social-icon" width="34" height="34">
			<img src="<?=APP_URL?>assets/images/web/homepage/Insta icon for footer.webp" alt="social-icon" width="34" height="34">
			<img src="<?=APP_URL?>assets/images/web/homepage/linkedin icon for footer.webp" alt="social-icon" width="34" height="34">
			<img src="<?=APP_URL?>assets/images/web/homepage/twitter icon for footer.webp" alt="social-icon" width="34" height="34">
		</span>
		</div>
		<div class="footer-div">
			<h3 class="family-open-sans title"><?=$footer_quick_links?></h3>
			<a href="<?=APP_URL?>" class="family-montserrat footer-link"><?=$footer_home?></a>
			<a href="<?=APP_URL?>about" class="family-montserrat footer-link"><?=$footer_about_us?></a>
			<a href="<?=APP_URL?>services" class="family-montserrat footer-link"><?=$footer_services?></a>
			<a href="<?=APP_URL?>contact" class="family-montserrat footer-link"><?=$footer_contact_us?></a>
		</div>
		<div class="footer-div">
			<h3 class="family-open-sans title"><?=$footer_other_pages?></h3>
			<a href="<?=APP_URL?>software-solutions" class="family-montserrat footer-link"><?=$footer_software_solutions?></a>
			<a href="<?=APP_URL?>web-development/" class="family-montserrat footer-link"><?=$footer_web_development?></a>
			<a href="<?=APP_URL?>internet-marketing" class="family-montserrat footer-link"><?=$footer_internet_marketing?></a>
			<a href="<?=APP_URL?>products/" class="family-montserrat footer-link"><?=$footer_product?></a>
		</div>
		<div class="footer-div">
			<h3 class="family-open-sans title"><?=$footer_join_our_newsletter?></h3>
			<div class="footer__newslatter">
        <form action="#" method="post" onsubmit="return false;">
            <input id="email_id" type="email" placeholder="<?=$footer_email?>">
            
            <button id="submit_subscribe" type="submit" ><img src="<?=APP_URL?>assets/images/web/homepage/email sent icon.webp" alt="demo-alt-tag" width="32" height="32"></button>
            <div class="success-msg-box">
            	<?=$footer_successfully_subscribe?>
            </div>
            <div class="error-msg-box">
            	<?=$footer_you_have_problem?>
            </div>
            <div class="correct-email-box">
            	<?=$footer_enter_correct_email?>
            </div>


            <!-- <button id="submit_subscribe" type="submit" onclick="save_subscriber();" ><img src="<?=APP_URL?>assets/images/web/homepage/email sent icon.webp"></button> -->
        </form>
    </div>
		</div>
	</div>
	<p class="all-rights">© <?=date("Y")?> Senda Japan. All rights reserved</p>
</footer>
<img alt="Go Up" src="<?=APP_URL?>assets/images/goto_top.webp" onclick="topFunction()" id="goto_top_arrow" width="40" height="40">

	<div class="whatapp-div">
    <a target="_blank" href="https://wa.me/+3249349028" aria-label="Whatapp Icon"><img alt="Whatsapp Us" src="<?=APP_URL.'assets/images/whatsapp.webp';?>" width="94" height="94"></a>
	</div>
<style>
@font-face {
  font-family: 'Open Sans';
  src: url('<?=APP_URL?>assets/fonts/OpenSans.woff2');
  font-display: swap; 
}
@font-face {
  font-family: 'Montserrat';
  src: url('<?=APP_URL?>assets/fonts/Montserrat.woff2');
  font-display: swap; 
}
</style>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="<?=APP_URL?>assets/vendors/bootstrap/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$("#submit_subscribe").click(function(){
			var email = $("#email_id").val();
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (regex.test(email)) {
            	$.ajax({
						  	url: "<?=APP_URL?>subscribe.php?email="+email, 
						  	success: function(data){
						    if(data){
						    	$("#email_id").val('');
						    	$(".success-msg-box").fadeIn();
						    	$(".success-msg-box").fadeOut(5000);
						    }else{
						    	$(".error-msg-box").fadeIn();
						    	$(".error-msg-box").fadeOut(5000);
						    }
						  }});
            }else{
            	$(".correct-email-box").fadeIn();
						  $(".correct-email-box").fadeOut(5000);
            }
          });
	});
</script>


<script>
//Smooth scroll top
mybutton = document.getElementById("goto_top_arrow");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  window.scrollTo({top: 0, behavior: 'smooth'});
}




	// function save_subscriber(){

	// 	email = document.getElementById("email_id").value;

	// 	var xhttp = new XMLHttpRequest();
	// 	xhttp.onreadystatechange = function() {
	// 		if (this.readyState == 4 && this.status == 200) {
	// 			document.getElementById("email_id").value="";
	// 		}
	// 	};
	// 	xhttp.open("GET", "<?=APP_URL?>subscribe.php?email="+email, true);
	// 	if (xhttp.send()) {alert();}


	// 	return false;
	// }



</script>

