
<?php get_header(); ?>
</header>
<div class="main-stuff">
<!-- sidebar-->
<?php get_sidebar(); ?>
<!-- sidebar-->

<!-- maincontent-->
	<div class="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="pos-excerpt">
			<h2 class="theTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<small>Posted on the <?php the_time('F jS, Y'); ?> in the <?php the_category(); ?></small>
			<?php the_post_thumbnail('large' ); ?>
			<?php the_excerpt(); ?>
		<?php endwhile; endif; ?>
		</article>
	</div>

<small id="page-identification">single.php</small>
<!-- maincontent-->
<?php get_footer(); ?>

</div>
