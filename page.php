<?php get_header(); ?>
	<?php $post = get_post(get_the_ID()); setup_postdata($post); ?>
	<? $template = get_template_name(get_the_ID()); ?>
	<? if($template == 'default') $template = 'page'; ?>
	<?php get_template_part('parts/background'); ?>
	<section id="<?= $post->post_name ?>" class="<? the_field('color_scheme') ?>">
		<?php get_template_part('parts/loop', $template); ?>
	</section>
	<?php if($post->post_parent === 0): ?>
		<?php $pages = get_pages(array('parent' => get_the_ID(), 'hierarchical' => 0, 'sort_column' => 'menu_order', 'sort_order' => 'ASC')); ?>
		<?php if(count($pages) > 0): ?>
			<?php foreach($pages as $post): setup_postdata($post); ?>
				<? $template = get_template_name(get_the_ID()); ?>
				<? if($template == 'default') $template = 'page'; ?>
				<?php get_template_part('parts/background'); ?>
				<section id="<?= $post->post_name ?>" class="<? the_field('color_scheme') ?>">
					<?php get_template_part('parts/loop', $template); ?>
				</section>
			<?php endforeach; wp_reset_postdata(); ?>
		<?php endif; ?>
	<?php endif; ?>
<?php get_footer(); ?>