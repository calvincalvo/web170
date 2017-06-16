<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Products</title>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body <?php body_class();?>>
<header>
    <div class="topOfNav">
        <a  href="http://calvincodes.com/wordpress-sp17/">
            <img  class="logo" src="<?php bloginfo('template_directory'); ?>/images/webLogo.png" alt="Logo" height="78" width="300" />
        </a>
        <a href="#">
        	<img class="cart" src="<?php bloginfo('template_directory'); ?>/images/assets/cart.png" alt="cart"/>
        </a>
    </div>
<!--Begin WP Menu-->
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation',)); ?>
    <!--End WP Menu-->
<?php wp_head(); ?>
