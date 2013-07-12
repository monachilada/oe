<?php get_header(); ?>
	<section>
		<div class="container">
			<?php if(have_posts()): ?>
				<h2><?php _e('Latest Posts'); ?></h2>
				<?php if(have_posts()) while(have_posts()): the_post(); ?>
					<?php get_template_part('parts/loop', 'post'); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<h2><?php _e('No posts to display'); ?></h2>
			<?php endif; ?>
		</div>
	</section>
<?php get_footer(); ?>