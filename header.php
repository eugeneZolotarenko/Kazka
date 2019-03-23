<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>БНВК Казка</title>
	<?php wp_head() ?>
</head>
<body>

<!-- Mobile Icons -->
<div class="navigation-line ">
<div class="m-social">
    <a target="_blank" href="/prozorist/blagodiinyi-fond-kazkovyi-svit"><i class="fas fa-hand-holding-usd"></i></a>
    <a target="_blank" href="https://www.youtube.com/channel/UChIEJegMQrSXvxv4ahF_CBA"><i class="fab fa-youtube"></i></a>
    <a target="_blank" href="https://www.facebook.com/groups/1284390685011463/about/"><i class="fab fa-facebook-square"></i></a>
    <a target="_blank" href="https://www.instagram.com/bnvkkazka/"><i class="fab fa-instagram"></i></a>
</div>

<!-- Left part of menu -->
<div class="m-menu">
<?php wp_nav_menu(array( 
'theme_location' => 'primary',
'container'  => 'ul', 
'menu_class' => 'menu',
'depth' => 2,)); ?>

<!-- Main logo -->
<div class="logo">
    <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/finalKazkaLogo.png" alt="Казка"></a> 
</div>

<!--Right part of menu-->
<?php wp_nav_menu(array( 
'theme_location' => 'primary-2',
'container'  => 'ul', 
'menu_class' => 'menu-2',
'depth' => 2,)); ?></div>
</div>  

<!-- Main-mobile-logo -->
<div class="m-logo">
    <a href="<?php blogInfo ('url')?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/finalKazkaLogo.png" alt="Казка"></a>
</div>
        
<!-- Mobile button for menu -->
<div class="burger-container" onclick="myFunction(this)">
<div class="burger-line-1"></div>
<div class="burger-line-2"></div>
<div class="burger-line-3"></div>
</div>
