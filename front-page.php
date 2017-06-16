
<?php get_header(); ?>
</header>
<div class="main-stuff">
<!-- banner custom field -->
	<div id="spotlight">
		<img id="spotlight-main-image" src="<?php echo get_post_meta($post->ID, 'banner', true); ?>" alt="main spotlight image">
	</div>
<!-- banner custom field -->
<!-- maincontent-->
<div id="widgets">
	<section class="widget-item">
		<h2>About Me:</h2>
		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?> <!-- starts the loop -->
        <?php the_content(''); ?>
        <?php endwhile; endif; ?>
	</section>
	<div class="widget-item">
		<h2>latest postings: </h2>
		<ul>
			<?php rewind_posts(); ?>
			<?php query_posts('showposts=4'); ?>
			<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
	<div class="widget-item">
		<h2>contact me: </h2>
		<p><strong>phone: </strong> 206-602-2060 <br> <strong>email: </strong> <a href="mailto:developer@example.com">developer@example.com</a></p>
	</div>
</div>
<small id="page-identification">front-page.php</small>
<!-- maincontent-->
<?php get_footer(); ?>

</div>
