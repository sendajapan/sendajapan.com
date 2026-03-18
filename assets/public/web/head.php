  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Senda Japan">
    <meta name="og:type" content="article">
    <meta name="og:url" content="https://www.sendajapan.com<?=$_SERVER['PHP_SELF']?>">
    <meta name="og:image" content="https://www.sendajapan.com/assets/images/common/logo.webp">

    <?php
      if(isset($meta)){ 
        if (is_array($meta)) {
          foreach($meta as $item){ ?>
            <meta name="<?=$item['name']?>" content="<?=$item['content']?>">
        <?php }
        }
      }
    ?>
    <link rel="icon" type="image/x-icon" href="<?=APP_URL?>assets/images/common/favicon.png">
    <title><?=$page_name?></title>
    <link href="<?=APP_URL?>assets/vendors/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=APP_URL?>assets/css/web_style.css" rel="stylesheet">
    <!-- <link href="<?=APP_URL?>assets/css/web_style_min.css" rel="stylesheet"> -->
	<link rel="canonical" href="<?="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" />
  </head>
