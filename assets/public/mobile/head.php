<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Content-type" content="text/html; charset=utf-8">
    <meta name="author" content="SENDA JAPAN">
    <meta name="og:type" content="article">
    <meta name="og:url" content="https://www.sendajapan.com<?=$_SERVER['PHP_SELF']?>">
    <meta name="og:image" content="https://www.sendajapan.com/assets/images/logo.webp">
  <?php
      if(isset($meta)){ 
        if (is_array($meta)) {
          foreach($meta as $item){ ?>
            <meta name="<?=$item['name']?>" content="<?=$item['content']?>">
        <?php }
        }
      }
  ?>
  <link rel="canonical" href="<?="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" />
  <link rel="icon" type="image/x-icon" href="<?=APP_URL?>assets/images/common/favicon.png">
  <link href="<?=APP_URL?>assets/css/mobile_style.css" rel="stylesheet" />
  <!-- <link href="<?=APP_URL?>assets/css/mobile_style_min.css" rel="stylesheet" /> -->

  


	






  <title><?=$page_name?></title>
</head>
<body>
	<div class="container">
		<button aria-label="burger" id="burger" class="open-main-nav">
			<span class="burger"></span>
			<span class="burger-text"></span>
		</button>
		<nav class="main-nav" id="main-nav">
			<ul>

				<li><a href="<?=APP_URL?>/about/"><?=$homepage_menu_about?></a></li>
				<li><a href="<?=APP_URL?>/products/"><?=$homepage_menu_products?></a></li>
				<li><a href="<?=APP_URL?>/services/"><?=$homepage_menu_services?></a></li>
				<li><a href="<?=APP_URL?>/contact/"><?=$homepage_menu_contact?></a></li>
				<li>&nbsp;</li>
				<li>
					<a href="<?=APP_URL?>lang.php?l=jp"><img class="menu_flag" src="<?=APP_URL?>assets/images/web/flag_jp.png" width="36" height="36"> <?=$homepage_menu_japanese?></a>
				</li>
				<li>
					<a href="<?=APP_URL?>lang.php?l=en"><img class="menu_flag" src="<?=APP_URL?>assets/images/web/flag_us.png" width="36" height="36"> <?=$homepage_menu_english?></a>
				</li>

			</ul>
		</nav>
	</div>
