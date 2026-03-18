<style>
		.whatapp-div {
	    position: fixed;
	    right: 4%;
	    bottom: 20%;
	    z-index: 9999;
		}
	</style>
			<div class="whatapp-div">
				<a target="_blank" href="https://wa.me/+3249349028" aria-label="Whatapp Icon"><img src="<?=APP_URL.'assets/images/whatsapp.webp';?>" width="75" height="76" alt="Whatsapp Us"></a>
    	</div>
<footer>







	<div class="footer_main">
		<img class="footer_logo" src="<?=APP_URL?>assets/images/web/homepage/Senda white logo for footer.webp" alt="SendaJapan logo" height="110" width="110">
		<p class="family-montserrat footer_sendjapan_address"><?=$footer_send_japan_add?></p>
		




		<h3 class="medium_text text-white"><?=$footer_quick_links?></h3>
		
		<div class="navigation_footer">
			<a href="<?=APP_URL?>" class="small_text"><?=$footer_home?></a>
			<a href="<?=APP_URL?>about" class="small_text"><?=$footer_about_us?></a>
			<a href="<?=APP_URL?>services" class="small_text"><?=$footer_services?></a>
			<a href="<?=APP_URL?>contact" class="small_text"><?=$footer_contact_us?></a>
		</div>
		
	
		<table cellpadding="0" cellspacing="0" border="0" width="100%" class="footer_social_icon_section">
			<tr>
				<td width="20%" align="center"><img width="40" height="40" class="footer_social_icon" src="<?=APP_URL?>assets/images/web/homepage/Facebook icon for footer.webp" alt="Social Icon"></td>
				<td width="20%" align="center"><img width="40" height="40" class="footer_social_icon" src="<?=APP_URL?>assets/images/web/homepage/Insta icon for footer.webp" alt="Social Icon"></td>
				<td width="20%" align="center" alt="Social Icon"><img width="40" height="40" class="footer_social_icon" src="<?=APP_URL?>assets/images/web/homepage/linkedin icon for footer.webp" alt="Social Icon"></td>
				<td width="20%" align="center" alt="Social Icon"><img width="40" height="40" class="footer_social_icon" src="<?=APP_URL?>assets/images/web/homepage/twitter icon for footer.webp" alt="Social Icon"></td>
			</tr>
		</table>

			
		<div class="join_us">
			<h3 class="family-open-sans title"><?=$footer_join_our_newsletter?></h3>

			<form action="#" method="post" onsubmit="return false;">
            <input id="email_id" type="email" placeholder="<?=$footer_email?>" style="border: 1px solid #fff; width: 100%;">
            
            <button id="submit_subscribe" type="submit" ><img src="<?=APP_URL?>assets/images/web/homepage/email sent icon.webp" width="32" height="32" alt="demo-alt-tag"></button>
            <div class="success-msg-box family-montserrat">
            	<?=$footer_successfully_subscribe?>
            </div>
            <div class="error-msg-box family-montserrat">
            	<?=$footer_you_have_problem?>
            </div>
            <div class="correct-email-box family-montserrat">
            	<?=$footer_enter_correct_email?>
            </div>


            <!-- <button id="submit_subscribe" type="submit" onclick="save_subscriber();" ><img src="<?=APP_URL?>assets/images/web/homepage/email sent icon.webp"></button> -->
        </form>
		</div>	
		<br><br><br><br><br>


		<!-- <div class="footer_address">
			<a href="<?=APP_URL?>/privacy" class="privacy_text">Privacy, Cookies Policy<br>Terms & Condition</a>
		</div> -->
		<div class="footer_address">
			<p class="copyright_text">COPYRIGHT &copy; <?=date("Y")?> - SENDAJAPAN</p>
		</div>
	</div>

	<img src="<?=APP_URL?>assets/images/goto_top.webp" onclick="topFunction()" id="goto_top_arrow" alt="Go Up" width="40" height="40">

</footer>

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



   </body>
</html>


<script>

//menu opening
let burger = document.getElementById('burger'),
	 nav    = document.getElementById('main-nav'),
	 slowmo = document.getElementById('slowmo');
burger.addEventListener('click', function(e){
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
});






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



</script>


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