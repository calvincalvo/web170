
<div class="sidenav aside" id="sidebar">
	<div id="sub-navigation" class="widget">
		<h2><?php
		if(is_page()) {
			echo get_the_title($post->post_parent);
		}else {
			echo 'Blog';
		}?>
		</h2>
		<ul>
			<?php
			if(is_page()) {
				if($post->post_parent){
					wp_list_pages(array('child_of' => $post->post_parent, "title_li" => "",));
				}else {
					wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',));
				}
			}else {
				wp_list_categories(array('title_li' => '',));
			}?>
		</ul>
	<?php if (!(is_page())); ?>
	<?php wp_list_categories(array('title_li' => __(' '))); ?>
	</div>
	<?php if (get_post_meta($post->ID, 'quote', true)) ; ?>
	<?php dynamic_sidebar(1); ?>
	<div id="pull-quote" class="widget">
		<?php if(get_post_meta($post->ID, 'quote', true)) : ?>
		<blockquote><?php echo get_post_meta($post->ID, 'quote', true);?></blockquote>
		<?php endif; ?>
	</div>
	<?php dynamic_sidebar(1); ?>
	<?php dynamic_sidebar(2); ?>
	<?php dynamic_sidebar('fred'); ?>
</div>
