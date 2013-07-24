<?php
/*
Template name: Home Page
*/
?>
<?php get_header(); ?>
	<?php $pages = get_pages(array('parent' => get_option('page_on_front'), 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC', 'exclude' => array(get_option('page_for_posts')))); ?>
	<?php if(count($pages) > 0): ?>
		<?php foreach($pages as $post): setup_postdata($post); ?>
			<? $template = str_replace('.php', '', get_post_meta(get_the_ID(), '_wp_page_template', true)); ?>
			<? if($template == 'default') $template = 'page'; ?>
			<?php get_template_part('parts/background'); ?>
			<section id="<?= $post->post_name ?>" class="<? the_field('color_scheme') ?>">
				<?php get_template_part('parts/loop', $template); ?>
			</section>
		<?php endforeach; wp_reset_postdata(); ?>
	<?php endif; ?>
<?php get_footer(); ?>