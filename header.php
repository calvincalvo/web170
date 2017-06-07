<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Products</title>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="shop-homepage.css" rel="stylesheet">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli,Hammersmith+One,Tauri' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body <?php body_class();?>>
<header>
    <div class="topOfNav">
        <a  href="http://calvincodes.com/protosite/index.php">
            <img  class="logo" src="<?php bloginfo('template_directory'); ?>/images/webLogo.png" alt="Logo" height="78" width="300" />
        </a>
        <a href="#">
        	<img class="cart" src="<?php bloginfo('template_directory'); ?>/images/assets/cart.png" alt="cart"/>
        </a>
    </div>
	<!-- <div id="cssmenu">
  <ul>
      <li><a href="about.php">ABOUT</a></li>
      <li><a href="product.php">PRODUCTS</a>
          <ul class="submenu">
           <li><a href="sweet.php">Sweet</a></li>
           <li><a href="salty.php">Salty</a></li>
           <li><a href="savory.php">Savory</a></li>
           <li><a href="gifts.php">Giftsets/Tasters</a></li>
        </ul>
      </li>
      <li><a href="support.php">SUPPORT</a></li>
      <li><a href="nutri.php">NUTRITION</a></li>
     <li><a href="blog.php">BLOG</a>
         <ul class="submenu">
           <li><a href="#">Cooking Instructions</a></li>
           <li><a href="#">History</a></li>
           <li><a href="#">Personal</a></li>
        </ul>
      </li>
     <li><a href="contact.php">CONTACT</a>
         <ul class="submenu">
           <li><a href="#">Catering</a></li>
           <li><a href="#">Schedule An interview</a></li>
           <li><a href="#">Personal</a></li>
        </ul>
     </li>
 </ul>
</div> -->


<!--Begin WP Menu-->
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation',)); ?>
    <!--End WP Menu-->
<?php wp_head(); ?>
