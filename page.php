
<?php get_header(); ?>
<div class="main-stuff">

<!-- maincontent-->
<div class="content about-contents">
	<img id="spotlight-about-image" src="<?php echo get_post_meta($post->ID, 'bioImage', true); ?>" alt="about spotlight image">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	<article id="article about-articles">
		<h2 class="theTitle"><?php the_title(); ?></h2>
		<small>Posted on the <?php the_time('F jS, Y'); ?></small>
		<?php the_content(); ?>
	</article>
	<?php endwhile; endif; ?>
</div>
<small id="page-identification">page.php</small>
<!-- maincontent-->
<?php get_footer(); ?>

</div>
