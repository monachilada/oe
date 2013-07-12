<?php
/*
Template name: Home Page
*/
?>
<?php get_header(); ?>
	<?php $pages = get_posts(array('post_type' => 'page', 'post_parent' => 0, 'orderby' => 'menu_order', 'order' => 'ASC', 'exclude' => array(get_option('page_for_posts'), get_option('page_on_front')))); ?>
	<?php if(count($pages) > 0): ?>
		<?php foreach($pages as $post): setup_postdata($post); ?>
			<? $template = str_replace('.php', '', get_post_meta(get_the_ID(), '_wp_page_template', true)); ?>
			<? if($template == 'default') $template = 'page'; ?>
			<section>
				<?php get_template_part('parts/loop', $template); ?>
			</section>
		<?php endforeach; wp_reset_postdata(); ?>
	<?php endif; ?>
<?php get_footer(); ?>