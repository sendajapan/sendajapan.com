	<?php 
		$actual_link = trim($_SERVER['REQUEST_URI'], '/');
		$uri_segments = explode('/', $actual_link);
		$page_active = end($uri_segments); 
		
		
		if(in_array($page_active, array('services', 'graphic-design', 'web-development', 'software-solutions', 'internet-marketing'))){
			$page = "services";
		}else if(in_array($page_active, array('nouman', 'ubaid', 'daud', 'hamza', 'ammar', 'hilal', 'sohail', 'salam', 'osama', 'zubair' ))){
			$page = "team";
		}else if( $page_active == '' || $page_active == 'sendajapan' ){
			$page = "home";
		}
		else{
			$page = $page_active;
		}
		
		
  ?>

    <div class="navbar navbar-inverse navbar-top">
      <div class="container-fluid bg-white">
		  <div class="container">
			<div class="row">
			  <div class="col-md-4">
				<a aria-label="SendaJapan Logo" href="<?=APP_URL?>"><img src="<?=APP_URL?>assets/images/common/logo.png" class="senda_logo" alt="SendaJapan Logo"></a>
			  </div>
			  <div class="col-md-8">
			  <ul class="nav navbar-nav navbar-right">
				<li class="<?=($page=='home') ? "active" : ''?>"><a href="<?=APP_URL?>"><?=$homepage_menu_home?></a></li>
				<li class="<?=($page=='about') ? "active" : ''?>"><a href="<?=APP_URL?>about"><?=$homepage_menu_about?></a></li>
				<li class="<?=($page=='products') ? "active" : ''?>"><a href="<?=APP_URL?>products"><?=$homepage_menu_products?></a></li>
				<li class="<?=($page=='services') ? "active" : ''?>"><a href="<?=APP_URL?>services"><?=$homepage_menu_services?></a></li>
				<li class="<?=($page=='contact') ? "active" : ''?>"><a href="<?=APP_URL?>contact"><?=$homepage_menu_contact?></a></li>
				

				<li class="dropdown-li"><a href="#" aria-label="Language">
					<div class="dropdown">
					  
				<?php
				// if($_SESSION['sendajapan']['lang']=="em"){
				//   echo '<span><img class="menu_flag" src="'.APP_URL.'assets/images/web/flag_us.png" width="24" height="24"> Empty</span>';
				// }
				// else 
				if($_SESSION['sendajapan']['lang']=="en"){
				  echo '<span><img class="menu_flag" src="'.APP_URL.'assets/images/web/flag_us.png" width="24" height="24" alt="flag"> '.$homepage_menu_english.'</span>';
				}
				else if($_SESSION['sendajapan']['lang']=="jp"){
				  echo '<span><img class="menu_flag" src="'.APP_URL.'assets/images/web/flag_jp.png" width="24" height="24" alt="flag"> '.$homepage_menu_japanese.'</span>';
				}
				else{
				  echo '<span><img class="menu_flag" src="'.APP_URL.'assets/images/web/flag_us.png" width="24" height="24" alt="flag"> '.$homepage_menu_english.'</span>';
				}
				?>					  
					  
						
						
						
						
						<div class="dropdown-content"><a href="#" aria-label="Language">
						  </a>
						<div class="row">
							<div class="col-md-12">
								<!-- <p><a href="<?=APP_URL?>lang.php?l=em"><img class="menu_flag" src="<?=APP_URL?>assets/images/web/flag_us.png" width="24" height="24"> Empty</a></p> -->
								<p><a href="<?=APP_URL?>lang.php?l=en"><img class="menu_flag" src="<?=APP_URL?>assets/images/web/flag_us.png" width="24" height="24"> <?=$homepage_menu_english?></a></p>
								<p><a href="<?=APP_URL?>lang.php?l=jp"><img class="menu_flag" src="<?=APP_URL?>assets/images/web/flag_jp.png" width="24" height="24"> <?=$homepage_menu_japanese?></a></p>
							</div>
						</div>
					  </div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
