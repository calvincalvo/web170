
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
<?php wp_head();?>
<!-- sidebar-->
<aside class="sidenav">
	<h2><?php
	if(is_page()) {
		echo get_the_title($post->post_parent);
	}else {
		echo 'Blog';
	}
	?></h2>
    <ul><?php
	if(is_page()) {
		if($post->post_parent){
			wp_list_pages(array('child_of' => $post->post_parent, "title_li" => "",));
		}else {
			wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',));
		}
	}else {
		wp_list_categories(array('title_li' => '',));
	}
	?>
    </ul>
</aside>
<!-- sidebar-->

<!-- maincontent-->
<section class="cats">
	<div class="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
		<article id="article">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<small>Posted on the <?php the_time('F jS, Y'); ?> in the <?php the_category(); ?></small>
			<?php the_content(); ?>
		</article>
		<?php endwhile; endif; ?>
		<small>index.php</small>
	</div>

</section>
<!-- maincontent-->
<!-- footer-->
 <div class="social">
        <a href="#">
            <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" />
        </a>
        <a href="#">
            <img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" />
        </a>
        <a href="#">
    <img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" />
        </a>
        <a href="#">
    <img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" />
        </a>
        <a href="#">
            <img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" />
        </a>
    </div>
	<?php wp_footer();?>
<footer>
    <div class="footnav">
        <div>
            <h3><a href="#">About</a></h3>
            <h3><a href="#">Products</a></h3>
        <ul>
            <li><a href="#">leo vitae</a></li>
            <li><a href="#">vitae auctor</a></li>
            <li><a href="#">leo faucibus</a></li>
            <li><a href="#">auctor faucibus</a></li>
        </ul>
        </div>

        <div>
        <h3><a href="#">Blog</a></h3>
        <ul>
            <li><a href="#">leo vitae</a></li>
            <li><a href="#">vitae auctor</a></li>
            <li><a href="#">leo faucibus</a></li>
            <li><a href="#">auctor faucibus</a></li>
        </ul>
        <h3><a href="#">Support</a></h3>
        </div>

        <div>
        <h3><a href="#">Nutrition</a></h3>
        <h3><a href="#">Contact</a></h3>
        <ul>
            <li><a href="#">leo vitae</a></li>
            <li><a href="#">vitae auctor</a></li>
            <li><a href="#">leo faucibus</a></li>
            <li><a href="#">auctor faucibus</a></li>
        </ul>
        </div>

        <div>
            <h2>Can't find what you're looking for? Search here!</h2>
            <p class="search"><img class="micon" src="<?php bloginfo('template_directory'); ?>/images/micon.png">Search</p>
        </div>
    </div>
<div class="smol"><small>
   &copy; 2017, All Rights Reserved ~ Authored by Calvin Calvo <!--
   <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
   <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>-->
    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
    </small></div>
<!-- jQuery -->
    <script src="scripts/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="scripts/bootstrap.min.js"></script>
</footer>
</body>
</html>
