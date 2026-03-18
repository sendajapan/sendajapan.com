<?php  include(APP_PATH.'assets/public/catalogue_common.php'); ?>



<h3 class="para_title text-blue-dark">our work showcase</h3>

<?php if($catalogue_btn_flag!=0){ ?>
	<div id="buttons" class="buttons_web"></div>
<?php } ?>


<div id="gallery" class="row">

	<!-- UI/UX -->


	<?php foreach($catalogue_info as $key=>$value){ ?>

	<div class="col-md-12 flip-card worklink_1 swap-on-hover__front-image" data-tags="<?=$value['category']?>">
	  <div class="flip-card-inner">
		<div class="flip-card-front">
		  <img alt="Our Works Project" src="<?=APP_URL?>assets/images/works/<?=$value['image']?>" width="345" height="231">
		</div>
		<div class="flip-card-back work_caption">
			<h3 class="category_h3"><?=$value['title']?> </h3>
			<p class="gallery__text_quoted"><?=strip_tags($value['desc'])?></p>
		</div>
	  </div>
	</div>


	<?php } ?>

</div>
	
