<?php
$team[] = array('name'=> 'Muhammad Nouman', 'title'=> 'Managing Director / Web Expert', 'avatar'=> 'team_nouman_homepage.webp', 'link'=> 'nouman');
$team[] = array('name'=> 'Ubaid ur Rehman', 'title'=> 'Sr. Web Developer', 'avatar'=> 'team_ubaid_homepage.webp', 'link'=> 'ubaid');
$team[] = array('name'=> 'Daud Ibrahim', 'title'=> 'Sr. Graphics Designer', 'avatar'=> 'team_daud_homepage.webp', 'link'=> 'daud');
$team[] = array('name'=> 'Kalim Hamza', 'title'=> 'Business Development Manager', 'avatar'=> 'team_hamza_homepage.webp', 'link'=> 'hamza');
$team[] = array('name'=> 'Mubashir Ammar', 'title'=> 'SEO Expert / Media Manager', 'avatar'=> 'team_ammar_homepage.webp', 'link'=> 'ammar');
$team[] = array('name'=> 'Hilal Shah', 'title'=> 'Maintenance Manager', 'avatar'=> 'team_hilal_homepage.webp', 'link'=> 'hilal');
$team[] = array('name'=> 'Sohail Ahmad', 'title'=> 'Web Developer', 'avatar'=> 'team_sohail_homepage.webp', 'link'=> 'sohail');
$team[] = array('name'=> 'Abdul Salam', 'title'=> 'Sr. UI/UX Designer', 'avatar'=> 'team_salam_homepage.webp', 'link'=> 'salam');
$team[] = array('name'=> 'Osama', 'title'=> 'UI/UX Designer', 'avatar'=> 'team_osama_homepage.webp', 'link'=> 'osama');
$team[] = array('name'=> 'Zubair', 'title'=> 'UI/UX Designer', 'avatar'=> 'team_zubair_homepage.webp', 'link'=> 'zubair');
?>

<section style="overflow:hidden;">
	<h3 class="para_title text-blue-dark text-center">MEET OUR EXPERT TEAM</h3>
	<br>

	<div id="slider1_container" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:520px;">
		<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:450px;">
			<?php foreach($team as $t){ ?>
				<div>
					<div class="team_captions_web">
						<h3> 
							<a href="<?=APP_URL.'team/'.$t['link']?>"><?=$t['name']?></a> 
						</h3>
						<p><?=$t['title']?></p>
					</div>
					<img data-u="image" alt="Team Member" src="<?=APP_URL?>assets/images/team/<?=$t['avatar']?>" />
				</div>
			<?php } ?>
		</div>
		
		<!-- Bullet Navigator -->
		<div data-u="navigator" class="jssorb052" style="position:absolute;bottom:0px;right:0;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
			<div data-u="prototype" class="i" style="width:40px;height:40px;">
				<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
					<circle class="b" cx="8000" cy="8000" r="5800"></circle>
				</svg>
			</div>
		</div>
	</div>

</section>
