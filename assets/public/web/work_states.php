<?php  include(APP_PATH.'assets/public/work_stats_common.php'); ?>

	  <div class="sections_showcase_container">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="score_display score_display_border">
						<div class="big_text"><?=round(ceil($days/20)*20)?>+</div>
						<div class="small_text">days worked</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="score_display score_display_border">
						<div class="big_text"><?=round(ceil( $days/4.5 /10) *10)?>+</div>
						<div class="small_text">projects finished</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="score_display score_display_border">
						<div class="big_text">4.995</div>
						<div class="small_text">ratings</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="score_display">
						<div class="big_text"><?=round(ceil( $days/4.5 /2.5 /10) *10)?>+</div>
						<div class="small_text">satisfied clients</div>
					</div>
				</div>
			</div>
		</div>
	</div>
