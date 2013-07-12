<?php get_header(); ?>
	<section>
		<div class="container">
			<?php if(have_posts()): ?>
				<?php if(has_post_thumbnail()): ?>
					<?php echo get_the_post_thumbnail(get_option('page_for_posts'), 'large'); ?>
				<?php endif; ?>
				<h2><?= get_the_title(get_option('page_for_posts')) ?></h2>
				<?php if(have_posts()) while(have_posts()): the_post(); ?>
					<?php get_template_part('parts/loop', 'post'); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<h2><?php _e('No posts to display'); ?></h2>
			<?php endif; ?>
		</div>
	</section>
<?php get_footer(); ?>