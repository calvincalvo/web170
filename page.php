
<?php get_header(); ?>

<!-- sidebar-->
<?php get_sidebar(); ?>
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
<?php get_footer(); ?>
