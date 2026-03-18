<?php  include(APP_PATH.'assets/public/catalogue_common.php'); ?>




	<h3 class="para_title text-blue-dark">our work showcase</h3>


	<?php if($catalogue_btn_flag!=0){ ?>
		<div id="buttons" class="buttons_web"></div>
	<?php } ?>







	<div id="gallery" class="row">
		<?php foreach($catalogue_info as $key=>$value){ ?>
			<div class="col-md-4 worklink_1" data-tags="<?=$value['category']?>">
				<span style="cursor:pointer;" onclick="openPopUp('<?=$key?>')">
					<img alt="Our Works Project" src="<?=APP_URL?>assets/images/works/<?=$value['image']?>" width="345" height="231">
					<div class="work_caption workcaption_1">
						<div class="blue_line"></div>
						<h3 class="category_h3"><?=$value['category']?></h3>
						<h3 class="name_h3"><?=$value['title']?></h3>
						<p class="para_text">
							<?=isset($value['desc']) ? $value['desc'] : "" ?>
						</p>
					</div>
				</span>
			</div>
		<?php } ?>
	</div>
	




<div id="myPopUp" class="overlay" style="display:none;">
  <div class="popup_main">
  	<span class="closebtn" onclick="closePopUp()">&times;</span>
  	<div class="popup_img"> <img id="popup_image_display" alt="Our Works Project Full Image" src="<?=APP_URL?>assets/images/works/web_large1.png"> </div>
  	<div class="popup_content">
  		<h3 class="para_title" id="popup_title_display">CALCULATOR</h3>
  		<p class="para_text" id="popup_desc_display">
  			&nbsp;
  		</p>
  	</div>
  </div>
</div>


<script>
function openPopUp(id) {
	
	<?php foreach($catalogue_info as $key=>$value){ ?>
		if(id == '<?=$key?>'){
		  document.getElementById("popup_image_display").src = "<?=APP_URL?>assets/images/works/<?=$value['big_image']?>";
		  document.getElementById("popup_title_display").innerHTML = "<?=$value['title']?>";
		  document.getElementById("popup_desc_display").innerHTML = "<?=$value['desc']?>";
		}
	<?php } ?>

  document.getElementById("myPopUp").style.display = "block";
}

function closePopUp() {
  document.getElementById("myPopUp").style.display = "none";
  document.getElementById("popup_desc_display").innerHTML = "";
}


document.addEventListener('keydown', function(event){
	if(event.key === "Escape"){
		closePopUp();
	}
});

</script>